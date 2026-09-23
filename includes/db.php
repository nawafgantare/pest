<?php
require_once __DIR__ . '/../config.php';

function getDbConnection() {
    static $pdo = null;
    if ($pdo === null) {
        $dbDir = dirname(DB_FILE);
        if (!file_exists($dbDir)) {
            mkdir($dbDir, 0755, true);
        }

        try {
            $pdo = new PDO('sqlite:' . DB_FILE);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            // Initialize schema if not exists
            $pdo->exec("CREATE TABLE IF NOT EXISTS leads (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                phone TEXT NOT NULL,
                email TEXT,
                service TEXT,
                message TEXT,
                source TEXT DEFAULT 'website',
                status TEXT DEFAULT 'New',
                notes TEXT,
                ip_address TEXT,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )");
        } catch (PDOException $e) {
            die("Database Error: " . $e->getMessage());
        }
    }
    return $pdo;
}

function saveLead($name, $phone, $email = '', $service = '', $message = '', $source = 'Website Form') {
    $db = getDbConnection();
    $stmt = $db->prepare("INSERT INTO leads (name, phone, email, service, message, source, ip_address) VALUES (:name, :phone, :email, :service, :message, :source, :ip)");
    $ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';

    $stmt->bindValue(':name', trim($name));
    $stmt->bindValue(':phone', trim($phone));
    $stmt->bindValue(':email', trim($email));
    $stmt->bindValue(':service', trim($service));
    $stmt->bindValue(':message', trim($message));
    $stmt->bindValue(':source', trim($source));
    $stmt->bindValue(':ip', $ip);

    if ($stmt->execute()) {
        return $db->lastInsertId();
    }
    return false;
}

function getLeads($statusFilter = '', $searchQuery = '') {
    $db = getDbConnection();
    $sql = "SELECT * FROM leads WHERE 1=1";
    $params = [];

    if (!empty($statusFilter)) {
        $sql .= " AND status = :status";
        $params[':status'] = $statusFilter;
    }

    if (!empty($searchQuery)) {
        $sql .= " AND (name LIKE :query OR phone LIKE :query OR email LIKE :query OR service LIKE :query)";
        $params[':query'] = '%' . $searchQuery . '%';
    }

    $sql .= " ORDER BY created_at DESC";
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll();
}

function updateLeadStatus($id, $status, $notes = '') {
    $db = getDbConnection();
    $stmt = $db->prepare("UPDATE leads SET status = :status, notes = :notes WHERE id = :id");
    return $stmt->execute([
        ':status' => $status,
        ':notes' => $notes,
        ':id' => $id
    ]);
}

function getLeadStats() {
    $db = getDbConnection();
    $total = $db->query("SELECT COUNT(*) FROM leads")->fetchColumn();
    $new = $db->query("SELECT COUNT(*) FROM leads WHERE status = 'New'")->fetchColumn();
    $contacted = $db->query("SELECT COUNT(*) FROM leads WHERE status = 'Contacted'")->fetchColumn();
    $converted = $db->query("SELECT COUNT(*) FROM leads WHERE status = 'Converted'")->fetchColumn();
    $closed = $db->query("SELECT COUNT(*) FROM leads WHERE status = 'Closed'")->fetchColumn();

    return [
        'total' => $total,
        'new' => $new,
        'contacted' => $contacted,
        'converted' => $converted,
        'closed' => $closed
    ];
}
