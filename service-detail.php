<?php
$servicesData = [
    'cockroach' => [
        'title' => 'Cockroach Pest Control',
        'image' => 'assets/images/cockroach-control.png',
        'description' => 'Cockroaches are among the most persistent and unsanitary pests, known to spread harmful bacteria, taint food, and trigger asthma/allergies. Our specialized cockroach treatment combines odorless herbal gel baiting in kitchen cabinets with targeted residual micro-encapsulated sprays.',
        'process' => [
            'Inspection & Nest Identification',
            'Advanced Odorless Gel Baiting in Corners & Hinges',
            'Drainage & Concealed Pipe Spraying',
            'Follow-up Monitoring & Prevention Advice'
        ]
    ],
    'termite' => [
        'title' => 'Termite Control & Eradication',
        'image' => 'assets/images/termite-control.png',
        'description' => 'Termites silently destroy wooden furniture, door frames, flooring, and structural beams. We provide post-construction and pre-construction subterranean termite treatments using the Drill-Fill-Seal technique with long-term written warranties.',
        'process' => [
            'Comprehensive Moisture & Mud Tube Audit',
            'Precision 45-degree Floor/Wall Drilling',
            'High-Pressure Termiticide Chemical Injection',
            'Color-Matched Hole Sealing & Warranty Card'
        ]
    ],
    'bed-bug' => [
        'title' => 'Bed Bug Eradication Treatment',
        'image' => 'assets/images/bed-bug-treatment.png',
        'description' => 'Bed bugs are tiny blood-sucking parasites that hide in mattress seams, bed frames, upholstery, and wall cracks. Our two-visit treatment eradicates adult bed bugs, nymphs, and unhatched eggs completely.',
        'process' => [
            'Deep Inspection of Mattresses, Curtains & Baseboards',
            'Intensive Chemical Spray & Thermal Heat Application',
            'Egg Shell Desiccation & Niche Fumigation',
            'Compulsory 15-Day Second Treatment Visit'
        ]
    ],
    'rodent' => [
        'title' => 'Rodent & Rat Control',
        'image' => 'assets/images/rodent-control.png',
        'description' => 'Rats and mice chew through electrical cables, cause fire hazards, contaminate food stores, and spread dangerous pathogens. We deploy tamper-proof bait stations and sticky glue boards for total rodent management.',
        'process' => [
            'Entry Point & Burrow Audit',
            'Installation of Lockable Bait Stations & Glue Pads',
            'Carity Sealing Guidance & Proofing Advice',
            'Scheduled Carcass Disposal Visits'
        ]
    ],
    'mosquito' => [
        'title' => 'Mosquito Control & Fogging',
        'image' => 'assets/images/mosquito-control.png',
        'description' => 'Mosquitoes carry deadly diseases such as Dengue, Malaria, and Chikungunya. We provide cold misting, anti-larval treatments in stagnant water sources, and outdoor thermal fogging.',
        'process' => [
            'Larval Site Identification & Treatment',
            'Indoor Wall Cold Mist Spraying',
            'Outdoor Garden/Compound Thermal Fogging',
            'Repellent Barrier Creation'
        ]
    ],
    'wood-borer' => [
        'title' => 'Wood Borer Treatment',
        'image' => 'assets/images/wood-borer-treatment.png',
        'description' => 'Wood borers (powder post beetles) attack wooden furniture, creating fine yellow powder. We inject specialized oil-based wood preservatives directly into the beetle exit holes using micro-syringes.',
        'process' => [
            'Pinpointing Active Powder Exit Holes',
            'Chemical Injection via Pressure Syringe',
            'Surface Chemical Coating for Wood Protection',
            'Periodic Monitoring Inspections'
        ]
    ],
    'spider' => [
        'title' => 'Spider Pest Control',
        'image' => 'assets/images/spider-control.png',
        'description' => 'Spider webs clutter high ceilings, corners, and light fixtures. Our technicians remove cobwebs thoroughly and apply long-lasting perimeter sprays that prevent spiders from spinning new webs.',
        'process' => [
            'Comprehensive Cobweb & Egg Sack Removal',
            'High-Ceiling Vacuuming & Cleaning',
            'Residual Chemical Contact Spray',
            'Light Fixture & Window Perimeter Barrier'
        ]
    ],
    'lizard' => [
        'title' => 'Lizard Pest Control',
        'image' => 'assets/images/lizard-control.png',
        'description' => 'Lizards on walls and near tube lights drop unhygienic droppings across your home. Our lizard control service utilizes specialized contact repellents that make wall surfaces unappealing to geckos.',
        'process' => [
            'Identification of Wall Crevices & Entry Gaps',
            'Application of Odorless Repellent Chemicals',
            'Light Source & Window Screen Consultation',
            'Follow-up Efficacy Check'
        ]
    ],
    'fly' => [
        'title' => 'House & Blow Fly Control',
        'image' => 'assets/images/fly-control.png',
        'description' => 'Flies carry over 100 pathogens and spoil food in dining areas, kitchens, and restaurants. We combine fly baiting, larvicide treatment, and UV fly catcher recommendations for total control.',
        'process' => [
            'Breeding Ground Sanitation Assessment',
            'Attractant Fly Baiting in High-Density Areas',
            'Indoor Repellent Misting',
            'Fly Trap & Mesh Installation Advice'
        ]
    ],
    'bee-wasp' => [
        'title' => 'Bee & Wasp Hive Removal',
        'image' => 'assets/images/bee-wasp-removal.png',
        'description' => 'Wasp and bee hives on balconies or roof eaves pose severe sting risks. Our team wears heavy protective suits to safely neutralize hives and relocate or destroy them without human danger.',
        'process' => [
            'Safety Assessment & Perimeter Isolation',
            'Protective Suit Deployment & Hive Neutralization',
            'Safe Hive Removal & Structure Cleaning',
            'Residual Repellent Coating on Eaves'
        ]
    ]
];

$serviceType = $_GET['type'] ?? 'cockroach';
$currentService = $servicesData[$serviceType] ?? $servicesData['cockroach'];

$pageTitle = $currentService['title'];
$activePage = "services";
require_once __DIR__ . '/includes/header.php';
?>

<section style="background: var(--color-secondary); color: white; padding: 60px 0; text-align: center;">
    <div class="container">
        <h1 style="color: white; font-size: 2.5rem; margin-bottom: 10px;"><?= htmlspecialchars($currentService['title']) ?></h1>
        <p style="color: rgba(255,255,255,0.8);">Safe, Eco-Friendly & Guaranteed Professional Treatment</p>
    </div>
</section>

<section style="padding: 80px 0;">
    <div class="container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 50px;">
        <div>
            <img src="<?= htmlspecialchars($currentService['image']) ?>" alt="<?= htmlspecialchars($currentService['title']) ?>" style="border-radius: var(--border-radius); box-shadow: var(--box-shadow); width: 100%; margin-bottom: 30px;">

            <h2 style="font-size: 1.8rem; margin-bottom: 15px; color: var(--color-secondary);">Service Overview</h2>
            <p style="color: var(--color-text-muted); font-size: 1.05rem; line-height: 1.8; margin-bottom: 30px;">
                <?= htmlspecialchars($currentService['description']) ?>
            </p>

            <h3 style="font-size: 1.4rem; margin-bottom: 15px; color: var(--color-primary);">Our 4-Step Treatment Process</h3>
            <ul style="list-style: none; padding: 0;">
                <?php foreach ($currentService['process'] as $index => $step): ?>
                    <li style="background: var(--color-light-bg); padding: 15px 20px; border-radius: var(--border-radius); margin-bottom: 10px; display: flex; align-items: center; gap: 15px; font-weight: 500; border-left: 4px solid var(--color-primary);">
                        <span style="background: var(--color-primary); color: white; width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.85rem; font-weight: 700; flex-shrink: 0;"><?= $index + 1 ?></span>
                        <?= htmlspecialchars($step) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Sidebar Booking Form -->
        <div>
            <div style="background: white; border: 1px solid var(--color-border); padding: 30px; border-radius: var(--border-radius); box-shadow: var(--box-shadow); position: sticky; top: 100px;">
                <h3 style="color: var(--color-secondary); margin-bottom: 10px;">Book <?= htmlspecialchars($currentService['title']) ?></h3>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 20px;">Schedule an inspection visit with our certified technicians.</p>

                <form class="ajax-form" action="process-form.php" method="POST">
                    <div class="form-message"></div>
                    <input type="hidden" name="source" value="Service Detail Page">
                    <input type="hidden" name="service" value="<?= htmlspecialchars($currentService['title']) ?>">

                    <div class="form-group">
                        <label>Your Name *</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
                    </div>

                    <div class="form-group">
                        <label>Phone Number *</label>
                        <input type="tel" name="phone" class="form-control" placeholder="10-digit mobile number" required>
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email address">
                    </div>

                    <div class="form-group">
                        <label>Address / Requirements</label>
                        <textarea name="message" class="form-control" rows="3" placeholder="Enter locality or property size..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">Schedule Inspection Now</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
