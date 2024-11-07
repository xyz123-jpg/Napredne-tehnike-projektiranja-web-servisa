<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Galerija slika</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <style>
            .card-img-top {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <h2 class="mb-4">Galerija slika</h2>

            <form
                action="upload.php"
                method="post"
                enctype="multipart/form-data"
            >
                <div class="mb-3">
                    <input
                        type="file"
                        name="image"
                        class="form-control"
                        required
                    />
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>

            <hr />

            <div class="row">
                <?php
                include 'config.php';
                    
                $limit = 10; 
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $offset = ($page - 1) * $limit;

                $query = "SELECT * FROM images ORDER BY uploaded_at DESC LIMIT $limit OFFSET $offset";
                $result = $conn->query($query); while ($row =
                $result->fetch_assoc()) { echo '
                <div class="col-md-3">
                    <div class="card mb-3">
                        <img
                            src="' . $row['file_path'] . '"
                            class="card-img-top"
                            onclick="openModal(\'' . $row['file_path'] . '\')"
                            style="cursor: pointer"
                        />
                        <div class="card-body text-center">
                            <button
                                class="btn btn-danger btn-sm"
                                onclick="deleteImage(' . $row['id'] . ')"
                            >
                                Izbriši
                            </button>
                        </div>
                    </div>
                </div>
                '; } ?>
            </div>

            <?php
            $resultTotal = $conn->query("SELECT COUNT(*) AS total FROM images");
            $totalImages = $resultTotal->fetch_assoc()['total']; $totalPages =
            ceil($totalImages / $limit); echo '
            <nav>
                <ul class="pagination">
                    '; for ($i = 1; $i <= $totalPages; $i++) { echo '
                    <li class="page-item ' . ($i == $page ? 'active' : '') . '">
                        <a class="page-link" href="?page=' . $i . '"
                            >' . $i . '</a
                        >
                    </li>
                    '; } echo '
                </ul>
            </nav>
            '; ?>
        </div>

        <div
            class="modal fade"
            id="imageModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body" style="display: contents">
                        <img id="modalImage" src="" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>

            function openModal(imagePath) {
                $('#modalImage').attr('src', imagePath);
                $('#imageModal').modal('show');
            }

            function deleteImage(id) {
                if (confirm('Sigurno želite izbrisati sliku?')) {
                    $.post('delete.php', { id: id }, function(response) {
                        if (response === 'success') {
                            location.reload();
                        } else {
                            alert('Greška u brisanju slike');
                        }
                    });
                }
            }
        </script>
    </body>
</html>
