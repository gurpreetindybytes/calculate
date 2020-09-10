# You can do some basic calculations by using this package

### To install this package run the following command
  ```  composer require coding-ninja/calculate=dev-master ```
### Load the file into your php project by following code
```
  require_once __DIR__ . './vendor/autoload.php';
  use Calculation\Calculate;
```

### Following methods are available in this package
#### To calculate the area
  ``` Calculate::area(height,width)```
#### To calculate the radius
  ``` Calculate::radius(diameter)```
#### To calculate the percentage
  ``` Calculate::percentage(total_marks,obtained_marks)```
