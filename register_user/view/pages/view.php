

<hr>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Action</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($data['users'] as $item) : ?>
        <tr>
            <td>
                <a href="#!" class="text-success">
                    <i class="material-icons">visibility</i>
                </a>
                <a href="index.php?action=edit&&id=<?php echo $item['id'];?>" class="text-primary">
                    <i class="material-icons">edit</i>
                </a>
                <a href="#!" class="text-danger">
                    <i class="material-icons">delete</i>
                </a>
            </td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['username']; ?></td>
            <td><?php echo $item['password']; ?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>