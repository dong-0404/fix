<?php
$student = new SinhVienModel;
$result = $student->SinhVien();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Book list</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Details
                            <a href="https://www.youtube.com/watch?v=jNt7WtWBBkU" class="btn-btn-primary float-end">ADD Students</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-borered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $student = new SinhVienModel;
                                $result = $student->SinhVien();

                                foreach ($result as $items) { ?>
                                    <tr>
                                        <td><?php echo $items['id']; ?></td>
                                        <td><?php echo $items['name']; ?></td>
                                        <td><?php echo $items['email']; ?></td>
                                        <td><?php echo $items['phone']; ?></td>
                                        <td><?php echo $items['course']; ?></td>
                                        <td>
                                            <a href="edit.php<?=$items['id'];?>" class="btn btn-success btn-sm">View</a>
                                            <a href="http://localhost/live/Edit/Web?id=<?= $items['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <form action="" method="POST" class="d-inline">
                                                <button type="submit" name="delete_student" value="<?= $items['id']; ?>" href="" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>