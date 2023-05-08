
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="HASINJAKA 1543, l'IA pour Hasinjaka">
    <title>ETU001543</title>
    <link rel="stylesheet" href="assets/Acc_Admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/Acc_Admin/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/Acc_Admin/css/checkbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/33.1.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="assets/Login/js/test.css">
</head>
<body id="page-top">

<div id="wrapper">

<div class="d-flex flex-column" id="content-wrapper">
  <div id="content">

    <div class="container-fluid">

      <div class="card card-xl">
        <div class="card-body">

          <form action="{{ url('/update') }}" method="post">
            {{ csrf_field() }}
            <input type="text" id="article_title" name="id" value="{{ $valeur->idarticle }}">

            <div class="mb-3">
              <label for="article_title" class="form-label">Titre de l'article:</label>
              <input type="text" id="article_title" name="titre" value="{{ $valeur->titre }}" class="form-control">
            </div>

            <div class="mb-3">
              <label for="article_content" class="form-label">Contenu:</label>
              <textarea id="contenu" name="contenu" class="form-control">{{ $valeur->contenu }}</textarea>
            </div>

            <div class="mb-3">
              <label for="article_summary" class="form-label">Résumé:</label>
              <textarea id="article_summary" name="resumer" class="form-control">{{ $valeur->resumer }}</textarea>
            </div>

            <div class="mb-3">
              <label for="article_author" class="form-label">Auteur:</label>
              <input type="text" id="article_author" name="auteur" value="{{ $valeur->auteur }}" class="form-control">
            </div>

            <div class="mb-3">
              <label for="article_image" class="form-label">Image:</label>
              <img src="{{ $valeur->img }}" width="100px" height="500px" alt="Product Image" class="card-img-top">
              <input class="form-control" type="file" id="selectImage">
              <input type="hidden" name="img" id="imageCode" value="{{ $valeur->img }}">
            </div>

            <div><button class="btn btn-primary d-block w-100" type="submit">VALIDER</button></div>
          </form>

          <script>
            const input = document.getElementById("selectImage");
            const imageCode = document.getElementById("imageCode");
            const convertBase64 = (file) => {
              return new Promise((resolve, reject) => {
                const fileReader = new FileReader();
                fileReader.readAsDataURL(file);
                fileReader.onload = () => {
                  resolve(fileReader.result);
                };
                fileReader.onerror = (error) => {
                  reject(error);
                };
              });
            };
            const uploadImage = async (event) => {
              const file = event.target.files[0];
              const base64 = await convertBase64(file);
              imageCode.value = base64;
              console.log(imageCode.value);
            };
            input.addEventListener("change", (e) => {
              uploadImage(e);
            });
          </script>

          <script src="<?php echo asset('assets/Login/js/ckeditor.js') ?>"></script>
          <script>
            ClassicEditor
              .create(document.querySelector('#contenu'))
              .catch(error => {
                console.error(error);
              });
          </script>

        </div>
      </div>

      <footer class="bg-white sticky-footer">
        <div class="container my-auto">
          <div class="text-center my-auto copyright">
            <span>Copyright © Brand 2023</span>
            </div>
          </div>
        </footer>
      </div>
      <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
  </div>
</div>
    <script src="assets/Acc_Admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/Acc_Admin/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/Acc_Admin/js/HTML-Table-to-Excel-V2.js"></script>
    <script src="assets/Acc_Admin/js/theme.js"></script>
</body>
</html>


</html>




