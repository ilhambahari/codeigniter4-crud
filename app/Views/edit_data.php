<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
     content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Codeigniter 4 Crud Application</title>
    <!--  -->
</head>
<body>
    <div class="container">
        <?php $validation = \Config\Services::validation(); ?>
        <h2 class="text-center mt-4 mb-4">Edit Data</h2>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">Add Data</div>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url('crud/update_validation'); ?>">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="<?= $user_data['name']; ?>">
                        <?php if($validation->getError('name')) : ?>
                            <div class="text-danger"><?= $validation->getError('name'); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?= $user_data['email']; ?>">
                        <?php if($validation->getError('email')) : ?>
                            <div class="text-danger"><?= $validation->getError('email'); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option value="">Select gender</option>
                            <option value="Male" <?= $user_data['gender'] == 'Male' ? 'selected' : ''; ?> >Male</option>
                            <option value="Female" <?= $user_data['gender'] == 'Female' ? 'selected' : ''; ?> >Female</option>
                        </select>
                        <?php if($validation->getError('gender')) : ?>
                            <div class="text-danger"><?= $validation->getError('gender'); ?></div>
                        <?php endif; ?>
                    </div>

                    <input type="hidden" name="id" value="<?= $user_data['id']; ?>">

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
 
</body>
</html>
