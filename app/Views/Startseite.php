<body>
<style>

.card-hero {
  border: 1px solid #e9ecef;
  border-radius: 10px;
  background: #ffffff;
  color: #212529;
  overflow: hidden;
  transition: box-shadow .12s ease;
}
.card-hero:hover {
  box-shadow: 0 8px 20px rgba(0,0,0,0.06);
}
.card-hero .icon-wrap {
  font-size: 36px;
  width: 64px;
  height: 64px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: 10px;
  background: rgba(0,123,255,0.06);
  color: #007bff;
  margin-bottom: 12px;
}
.card-hero .card-body {
  padding: 2rem 1.6rem;
}
.card-hero .lead {
  color: rgba(33,37,41,0.8);
}
.btn-cta {
  background: #007bff;
  color: #fff;
  border: none;
}
.btn-cta:hover {
  background: #0069d9;
}
</style>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <a href="/tasks" class="text-decoration-none" aria-label="Zur Aufgabenübersicht">
                <div class="card card-hero shadow-sm">
                    <div class="card-body text-center">
                        <div class="icon-wrap mx-auto">
                            <i class="fas fa-tasks" style="font-size:24px;"></i>
                        </div>
                        <h4 class="card-title mb-1">Aufgabe 5</h4>
                        <p class="card-text lead mb-3">Zur Aufgabenübersicht</p>
                        <div class="d-flex justify-content-center">
                            <a href="/tasks" class="btn btn-cta btn-sm px-4" role="button">Zur Tasks-Seite</a>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

</body>