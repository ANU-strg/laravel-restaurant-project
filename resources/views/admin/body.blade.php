<div class="container">
  <div class="row mt-4">
      <div class="col-md-6">
          <div class="card bg-primary text-white">
              <div class="card-body">
                  <h5 class="card-title">Total Menu Makanan</h5>
                  <div class="d-flex align-items-center">
                      <i class="fas fa-utensils fa-3x me-3"></i>
                      <h2 class="mb-0">{{ $foodCount ?? '0' }}</h2>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-6">
          <div class="card bg-success text-white">
              <div class="card-body">
                  <h5 class="card-title">Total Pesanan</h5>
                  <div class="d-flex align-items-center">
                      <i class="fas fa-shopping-cart fa-3x me-3"></i>
                      <h2 class="mb-0">{{ $orderCount ?? '0' }}</h2>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>