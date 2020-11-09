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
        <h2 class="text-center mt-4 mb-4">Add Data</h2>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">Add Data</div>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="<?= base_url("crud/add_validation"); ?>">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                        <?php if($validation->getError('name')) : ?>
                            <div class="text-danger"><?= $validation->getError('name'); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                        <?php if($validation->getError('email')) : ?>
                            <div class="text-danger"><?= $validation->getError('email'); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option value="">Select gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <?php if($validation->getError('gender')) : ?>
                            <div class="text-danger"><?= $validation->getError('gender'); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Add</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
 
</body>
</html>
