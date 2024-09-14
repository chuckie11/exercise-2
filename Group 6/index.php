<?php
$members = [
    ['name' => 'Marc Lorence Cabalida', 'role' => 'Leader', 'image' => 'lorence.jpg', 'age' => 20, 'birthday' => 'May 03, 2004', 'sex' => 'Male'],
    ['name' => 'Kingfranz Guevarra', 'role' => 'Member', 'image' => 'king.jpg', 'age' => 20, 'birthday' => 'September 05, 2004', 'sex' => 'Male'],
    ['name' => 'Chuckie Yonting', 'role' => 'Member', 'image' => 'chuckie.jpg', 'age' => 20, 'birthday' => 'November 22, 2003', 'sex' => 'Male'],
    ['name' => 'John Arly Murcia', 'role' => 'Member', 'image' => 'mirai.jpg', 'age' => 22, 'birthday' => 'September 03, 2002', 'sex' => 'Male'],
    ['name' => 'Rhea', 'role' => 'Member', 'image' => 'rhea.jpg', 'age' => 27, 'birthday' => 'June 30, 1997', 'sex' => 'Female']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GROUP 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>GROUP 6</h1>
    </header>
    <div class="container">
        <div class="group6">
            <?php foreach ($members as $member): ?>
                <div class="member" onclick="showMemberInfo('<?php echo htmlspecialchars($member['name']); ?>', '<?php echo htmlspecialchars($member['role']); ?>', '<?php echo htmlspecialchars($member['image']); ?>', '<?php echo htmlspecialchars($member['age']); ?>', '<?php echo htmlspecialchars($member['birthday']); ?>', '<?php echo htmlspecialchars($member['sex']); ?>')">
                    <img src="<?php echo htmlspecialchars($member['image']); ?>" alt="<?php echo htmlspecialchars($member['name']); ?>">
                    <h2><?php echo htmlspecialchars($member['name']); ?></h2>
                    <p class="role"><?php echo htmlspecialchars($member['role']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div id="member-modal" class="modal">
        <div class="modal-content">
            <span class="close-button" onclick="closeModal()">&times;</span>
            <h2 id="modal-name">Name</h2>
            <img id="modal-image" src="" alt="Member Image">
            <p id="modal-role">Role</p>
            <p id="modal-age">Age</p>
            <p id="modal-birthday">Birthday</p>
            <p id="modal-sex">Sex</p>
        </div>
    </div>

    <script src="jscript.js"></script>
</body>
</html>
