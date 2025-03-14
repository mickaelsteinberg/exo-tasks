<?php require_once __DIR__ . '/templates/header.php'; ?>

<h1>Liste des Tâches</h1>
<?php if (!empty($tasks)):  ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?php echo htmlspecialchars($task['id']); ?></td>
                    <td><?php echo htmlspecialchars($task['titre']); ?></td>
                    <td><?php echo htmlspecialchars($task['description']); ?></td>
                    <td><?php echo htmlspecialchars($task['status']); ?></td>
                    <td><a href="?id=<?= $task['id'] ?>&action=supprimer">Supprimer</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p style="text-align: center;">Aucune tâche trouvée.</p>
<?php endif; ?>

<?php require_once __DIR__ . '/templates/footer.php'; ?>