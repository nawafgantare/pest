<?php
require_once __DIR__ . '/includes/db.php';

// Handle Actions (Status Updates or Note Updates)
$actionMessage = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'update_lead') {
    $leadId = intval($_POST['lead_id'] ?? 0);
    $status = trim($_POST['status'] ?? 'New');
    $notes  = trim($_POST['notes'] ?? '');

    if ($leadId > 0 && updateLeadStatus($leadId, $status, $notes)) {
        $actionMessage = 'Lead #' . $leadId . ' updated successfully.';
    } else {
        $actionMessage = 'Failed to update lead.';
    }
}

// Filters & Search
$statusFilter = trim($_GET['status'] ?? '');
$searchQuery  = trim($_GET['search'] ?? '');

$leads = getLeads($statusFilter, $searchQuery);
$stats = getLeadStats();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shakti Pest Control CRM - Lead Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #9E1B1E;
            --secondary: #1A2530;
            --bg: #F4F6F9;
            --card-bg: #FFFFFF;
            --text-dark: #212529;
            --text-muted: #6C757D;
            --border: #DEE2E6;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Poppins', sans-serif; }
        body { background-color: var(--bg); color: var(--text-dark); min-height: 100vh; display: flex; flex-direction: column; }
        header { background-color: var(--secondary); color: white; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; border-bottom: 4px solid var(--primary); }
        header h1 { font-size: 1.4rem; display: flex; align-items: center; gap: 10px; }
        header .badge { background: var(--primary); font-size: 0.8rem; padding: 4px 8px; border-radius: 4px; }
        .container { padding: 2rem; max-width: 1300px; margin: 0 auto; width: 100%; }

        .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin-bottom: 2rem; }
        .stat-card { background: var(--card-bg); padding: 1.2rem; border-radius: 8px; border-left: 4px solid var(--primary); box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
        .stat-card h3 { font-size: 0.85rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; }
        .stat-card .value { font-size: 1.8rem; font-weight: 700; color: var(--secondary); margin-top: 5px; }

        .filters-bar { background: var(--card-bg); padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem; display: flex; gap: 1rem; flex-wrap: wrap; align-items: center; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
        .filters-bar input, .filters-bar select, .filters-bar button { padding: 0.6rem 1rem; border: 1px solid var(--border); border-radius: 6px; font-size: 0.9rem; }
        .filters-bar input { flex: 1; min-width: 200px; }
        .filters-bar button { background: var(--primary); color: white; border: none; cursor: pointer; font-weight: 600; }
        .filters-bar button:hover { opacity: 0.9; }

        .table-responsive { background: var(--card-bg); border-radius: 8px; overflow-x: auto; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
        table { width: 100%; border-collapse: collapse; text-align: left; font-size: 0.9rem; }
        th, td { padding: 1rem; border-bottom: 1px solid var(--border); vertical-align: middle; }
        th { background: #F8F9FA; color: var(--secondary); font-weight: 600; }
        tr:hover { background: #F8F9FA; }

        .status-tag { display: inline-block; padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; font-weight: 600; text-transform: uppercase; }
        .status-New { background: #E3F2FD; color: #0D47A1; }
        .status-Contacted { background: #FFF3E0; color: #E65100; }
        .status-Converted { background: #E8F5E9; color: #1B5E20; }
        .status-Closed { background: #FFEBEE; color: #C62828; }

        .action-form { display: flex; gap: 6px; align-items: center; }
        .action-form select { padding: 4px 8px; font-size: 0.8rem; border-radius: 4px; border: 1px solid var(--border); }
        .action-form button { padding: 4px 10px; font-size: 0.8rem; background: var(--secondary); color: white; border: none; border-radius: 4px; cursor: pointer; }

        .alert { background: #E8F5E9; color: #2E7D32; padding: 1rem; border-radius: 6px; margin-bottom: 1rem; border: 1px solid #A5D6A7; }
    </style>
</head>
<body>

<header>
    <h1>Shakti Pest Control <span class="badge">CRM Portal</span></h1>
    <div>
        <a href="index.php" style="color: white; text-decoration: none; font-size: 0.9rem;">← Back to Website</a>
    </div>
</header>

<div class="container">

    <?php if (!empty($actionMessage)): ?>
        <div class="alert"><?= htmlspecialchars($actionMessage) ?></div>
    <?php endif; ?>

    <div class="stats-grid">
        <div class="stat-card">
            <h3>Total Leads</h3>
            <div class="value"><?= $stats['total'] ?></div>
        </div>
        <div class="stat-card" style="border-left-color: #0D47A1;">
            <h3>New Enquiries</h3>
            <div class="value"><?= $stats['new'] ?></div>
        </div>
        <div class="stat-card" style="border-left-color: #E65100;">
            <h3>Contacted</h3>
            <div class="value"><?= $stats['contacted'] ?></div>
        </div>
        <div class="stat-card" style="border-left-color: #1B5E20;">
            <h3>Converted</h3>
            <div class="value"><?= $stats['converted'] ?></div>
        </div>
    </div>

    <form class="filters-bar" method="GET" action="crm.php">
        <input type="text" name="search" placeholder="Search by name, phone, email, service..." value="<?= htmlspecialchars($searchQuery) ?>">
        <select name="status">
            <option value="">All Statuses</option>
            <option value="New" <?= $statusFilter === 'New' ? 'selected' : '' ?>>New</option>
            <option value="Contacted" <?= $statusFilter === 'Contacted' ? 'selected' : '' ?>>Contacted</option>
            <option value="Converted" <?= $statusFilter === 'Converted' ? 'selected' : '' ?>>Converted</option>
            <option value="Closed" <?= $statusFilter === 'Closed' ? 'selected' : '' ?>>Closed</option>
        </select>
        <button type="submit">Filter Leads</button>
        <?php if (!empty($searchQuery) || !empty($statusFilter)): ?>
            <a href="crm.php" style="font-size: 0.85rem; color: var(--text-muted); text-decoration: underline; margin-left: 10px;">Clear Filters</a>
        <?php endif; ?>
    </form>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Date & Time</th>
                    <th>Customer Name</th>
                    <th>Contact Info</th>
                    <th>Requested Service</th>
                    <th>Source</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Update Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($leads)): ?>
                    <tr>
                        <td colspan="9" style="text-align: center; padding: 2rem; color: var(--text-muted);">
                            No lead records found matching your query.
                        </td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($leads as $lead): ?>
                        <tr>
                            <td><strong>#<?= $lead['id'] ?></strong></td>
                            <td style="font-size: 0.8rem; color: var(--text-muted);">
                                <?= date('d M Y, h:i A', strtotime($lead['created_at'])) ?>
                            </td>
                            <td><strong><?= htmlspecialchars($lead['name']) ?></strong></td>
                            <td>
                                <div>📞 <a href="tel:<?= htmlspecialchars($lead['phone']) ?>"><?= htmlspecialchars($lead['phone']) ?></a></div>
                                <?php if (!empty($lead['email'])): ?>
                                    <div style="font-size: 0.8rem;">✉️ <?= htmlspecialchars($lead['email']) ?></div>
                                <?php endif; ?>
                            </td>
                            <td><span style="font-weight: 500; color: var(--primary);"><?= htmlspecialchars($lead['service']) ?></span></td>
                            <td><small><?= htmlspecialchars($lead['source']) ?></small></td>
                            <td style="max-width: 250px; font-size: 0.85rem;">
                                <?= htmlspecialchars($lead['message'] ?: '-') ?>
                            </td>
                            <td>
                                <span class="status-tag status-<?= htmlspecialchars($lead['status']) ?>">
                                    <?= htmlspecialchars($lead['status']) ?>
                                </span>
                            </td>
                            <td>
                                <form class="action-form" method="POST" action="crm.php">
                                    <input type="hidden" name="action" value="update_lead">
                                    <input type="hidden" name="lead_id" value="<?= $lead['id'] ?>">
                                    <select name="status">
                                        <option value="New" <?= $lead['status'] === 'New' ? 'selected' : '' ?>>New</option>
                                        <option value="Contacted" <?= $lead['status'] === 'Contacted' ? 'selected' : '' ?>>Contacted</option>
                                        <option value="Converted" <?= $lead['status'] === 'Converted' ? 'selected' : '' ?>>Converted</option>
                                        <option value="Closed" <?= $lead['status'] === 'Closed' ? 'selected' : '' ?>>Closed</option>
                                    </select>
                                    <button type="submit">Save</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
