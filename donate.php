<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body class="bg-light">

  <div class="container">
    <!-- navbar 2.0 -->
    <nav class="navbar navbar-light bg-light pb-4">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">

          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
    </nav>
  </div>

    <div class="container px-2">
        <div>
            <div>
              <h5 class="pb-1 pb-md-2">Donation Info</h5>
            </div>
            
           
          
            <form action="process.php" method="post" enctype="multipart/form-data" class="pb-3 pb-md-0">
            <div class="form-row">
                  <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="name" placeholder="Listing Title" required>
                  </div>
                  <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                  </div>
             
            </div>
            <div class="form-row">
              <div class="form-group col-sm-4">
                <select name="category" class="form-control" id="exampleFormControlSelect1" required>
                  <option value="">Category</option>
                  <option value="keyboard">Piano / Keyboards</option>
                  <option value="woodwind">Woodwind</option>
                  <option value="brass">Brass</option>
                  <option value="percussion">Percussion</option>
                  <option value="amplifier">Instrument Amplifier / Effects</option>
                  <option value="electronic">Electronic / Sampler</option>
                  <option value="pro-audio">Pro-Audio</option>
                  <option value="media">Sheet Music / Books</option>
                  <option value="other">Other</option>
                </select>
              </div>
                  <div class="form-group col-sm-4">
                      <input type="text" name="brand" class="form-control" placeholder="Brand" required>
                  </div>
                  <div class="form-group col-sm-4">
                      <input type="text" name="model" class="form-control" placeholder="Model" required>
                  </div>
             </div>
          
            <div class="form-row">
                  <div class="form-group col-sm-4">
                    <select name="condition" class="form-control" id="exampleFormControlSelect1" required>
                      <optgroup label="Condition">
                        <option value="New">New</option>
                        <option value="Excellent">Excellent</option>
                        <option value="Good">Good</option>
                        <option value="Poor">Poor</option>
                        <option value="Needs Repair">Needs Repair</option>
                      </optgroup>
                    </select>
                  </div>
                  <div class="form-group col-sm-4">
                      <input type="text" name="year" class="form-control" placeholder="Year">
                  </div>
                  <div class="form-group col-sm-4">
                      <select name="location" id="" class="form-control" required>
                          <option value="Manhattan">Manhattan</option>
                          <option value="Brooklyn">Brooklyn</option>
                          <option value="Queens">Queens</option>
                          <option value="Bronx">Bronx</option>
                          <option value="Staten Island">Staten Island</option>
                      </select>
                  </div>
          
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <h5>Item Description</h5>
                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
 
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
              </div>
              <div class="custom-file">
                <input type="file" name="pic" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>
            </div>

            <button type="submit" class="btn btn-outline-dark btn-block">Submit</button>
          </form>
          
          </div>
    </div>

<!-- <script>
  var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
    document.getElementById("demo").innerHTML = myObj.name;
  }
};
xmlhttp.open("GET", "info.json", true);
xmlhttp.send();
</script> -->


    
</body>
</html>