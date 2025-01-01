<div class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
    <div class="container py-5">
        <h1 class="section-title mb-5" style="font-size: 48px;">PESAN MEJA</h1>
        <form action="#" method="POST" id="tableBookingForm">
            <div class="row mb-5 justify-content-center">
                <div class="col-sm-6 col-md-3 col-xs-12 my-3">
                    <input type="email" 
                           name="email" 
                           class="form-control form-control-lg custom-form-control" 
                           placeholder="Email Anda"
                           required>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-3">
                    <input type="number" 
                           name="guests" 
                           class="form-control form-control-lg custom-form-control" 
                           placeholder="Jumlah Tamu" 
                           max="20" 
                           min="1"
                           required>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-3">
                    <input type="time" 
                           name="booking_time" 
                           class="form-control form-control-lg custom-form-control" 
                           required>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-3">
                    <input type="date" 
                           name="booking_date" 
                           class="form-control form-control-lg custom-form-control" 
                           required>
                </div>
            </div>
            <button type="submit" class="btn btn-lg btn-danger rounded-pill px-5 py-3">Cari Meja</button>
        </form>
    </div>
</div>

<style>
.has-bg-overlay {
    background-color: rgba(0, 0, 0, 0.8);
    padding: 80px 0;
}

.custom-form-control {
    border-radius: 50px !important;
    border: 2px solid rgba(255, 255, 255, 0.2) !important;
    padding: 25px 30px !important;
    height: 80px !important;
    font-size: 18px !important;
    background-color: rgba(255, 255, 255, 0.1) !important;
    color: white !important;
    width: 100% !important;
}

.custom-form-control::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

input[type="date"].custom-form-control,
input[type="time"].custom-form-control {
    padding: 20px 30px !important;
}

.custom-form-control:focus {
    border-color: #fff !important;
    box-shadow: 0 0 0 0.2rem rgba(255,255,255,.25) !important;
    background-color: rgba(255, 255, 255, 0.15) !important;
}

.btn-danger {
    font-size: 18px;
    padding: 15px 50px;
    background-color: #ff214f;
    border: none;
    min-width: 200px;
}

.btn-danger:hover {
    background-color: #ff0a3c;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255,33,79,0.3);
}

@media (max-width: 768px) {
    .custom-form-control {
        height: 60px !important;
        font-size: 16px !important;
        margin-bottom: 15px;
    }
    
    .section-title {
        font-size: 36px !important;
    }
}
</style>