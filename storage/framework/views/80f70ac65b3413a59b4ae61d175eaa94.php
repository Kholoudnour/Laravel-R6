<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Classes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">
  <style>
    * {
      font-family: "Lato", sans-serif;
    }
  </style>
</head>

<body>
  <main>
    <div class="container my-5">
      <div class="bg-light p-5 rounded">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Classes Names</h2>
        <table class="table table-hover">
          <thead>
            <tr class="table-dark">
              <th scope="col">Classes</th>
              <th scope="col">Capacity</th>
              <th scope="col">Price</th>
              <th scope="col">Timefrom</th>
              <th scope="col">Timeto</th>
              <th scope="col">Isfulled</th>
              <th scope="col">Edit</th>
              <th scope="col">Show</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td scope="row"><?php echo e($class['classname']); ?></td>
              <td><?php echo e($class['capacity']); ?></td>
              <td><?php echo e($class['price']); ?></td>
              <td><?php echo e($class['timefrom']); ?></td>
              <td><?php echo e($class['timeto']); ?></td>
              <td><?php echo e($class['isfulled']=="1" ? "Yes": "NO"); ?></td>
              <td><a href= "<?php echo e(route('class.edit', $class['id'])); ?>">edit</a></td>
              <td><a href= "<?php echo e(route('class.show', $class['id'])); ?>">Show</a></td>
              <td><a href= "<?php echo e(route('class.destroy', $class['id'])); ?>" onclick=" return confirm('Are you sure you want to delete?')">Delete</a></td>


            </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel-R6/resources/views/classes.blade.php ENDPATH**/ ?>