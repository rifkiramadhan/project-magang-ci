<php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provinsi CI 3</title>

     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
          crossorigin="anonymous">

    <!-- My JQuery -->
    <script></script>

</head>
<body>

    <div style=" width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">
        <div class="container mt-5">
            <div class="row col-12">
                <form action="" class="form-control">

                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                        <div id="nameHelp" class="form-text">Gunakanlah nama tanpa angka, dan simbol!</div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Gunakanlah Email yang valid!</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">    
                        <label for="exampleDataList" class="form-label">Provinsi</label>
                        <?php
                            $provinces = $this->db->query('SELECT * FROM provinces')->result_array();
                            
                            echo "<select class=\"form-select\">";
                            for ($i = 0; $i < sizeof($provinces); $i++) {
                                echo "<option value=\"" . $provinces[$i]['name'] . "\">" . $provinces[$i]['name'] . "</option>";
                            }
                            echo "</select>";
                        ?>
                    </div>

                    <div class="mb-3">
                        <label for="exampleDataList" class="form-label">Daerah</label>
                        <?php
                            $districts = $this->db->query('SELECT * FROM districts')->result_array();
                            
                            echo "<select class=\"form-select\">";
                            for ($i = 0; $i < sizeof($districts); $i++) {
                                echo "<option value=\"" . $districts[$i]['name'] . "\">" . $districts[$i]['name'] . "</option>";
                            }
                            echo "</select>";
                        ?>
                    </div>

                    <div class="mb-3">
                        <label for="exampleDataList" class="form-label">Kabupaten</label>
                        <?php
                            $regencies = $this->db->query('SELECT * FROM regencies')->result_array();
                            
                            echo "<select class=\"form-select\">";
                            for ($i = 0; $i < sizeof($regencies); $i++) {
                                echo "<option value=\"" . $regencies[$i]['name'] . "\">" . $regencies[$i]['name'] . "</option>";
                            }
                            echo "</select>";
                        ?>
                    </div>

                    <div class="mb-3">    
                        <label for="exampleDataList" class="form-label">Desa</label>
                        <?php
                            $villages = $this->db->query('SELECT * FROM villages')->result_array();
                            
                            echo "<select class=\"form-select\">";
                            for ($i = 0; $i < sizeof($villages); $i++) {
                                echo "<option value=\"" . $villages[$i]['name'] . "\">" . $villages[$i]['name'] . "</option>";
                            }
                            echo "</select>";
                        ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
            crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>