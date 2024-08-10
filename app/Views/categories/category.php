
        <div class="col-12 col-md-2 mb-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <h3>Category</h3>
                </li>
                <?php foreach($categories as $category): ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/products/index/<?= $category['id']; ?>"><?= $category['name']; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>