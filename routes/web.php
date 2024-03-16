<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;

use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\TrainingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::post('/submit-form', [VisitorController::class, 'store'])->name('submit-form');



//Route::get('/visitors', function () {    return view('visitors');});

Route::get('/visitors', [VisitorController::class, 'showVisitors']);

Route::get('/ViewCert', [CertificatesController::class, 'MakeCertificate']);

Route::get('/GetCert', [CertificatesController::class, 'getcertificate']);
Route::post('/GetCerts', [CertificatesController::class, 'getcert'])->name('generate-cert');


Route::group(['prefix' => 'training'], function() {

    Route::get('/', [TrainingController::class, 'home'])->name('hometraining');
    Route::get('/StudentsTable', [TrainingController::class, 'Studenttable'])->name('Studentstable');
    Route::post('/students/register', [TrainingController::class, 'registerstudent'])->name('register.student');


    Route::get('/RegisterStation', [TrainingController::class, 'registerTrainingStations'])->name('registerTrainingStations');
    Route::post('/register-training-station', [TrainingController::class, 'savetrainingstation'])->name('register.training.station');

    Route::get('/RegisterCourses', [TrainingController::class, 'registerCourses'])->name('registerCourses');
    Route::post('/register-Courses', [TrainingController::class, 'saveCourses'])->name('register.Courses');

    Route::get('/EnrolmentTab', [TrainingController::class, 'StudentEnrolmenttab'])->name('StudentEnrolmenttab');


    Route::get('/CertifiedStudents', [CertificatesController::class, 'CertificiedStudents'])->name('CertificiedStudents');
    Route::POST('/RegisterCertifiedStudent', [CertificatesController::class, 'registerCertifiedStudent'])->name('registerCertifiedStudent');

    // Route::get('/forms', [DashboardOneController::class, 'form'])->name('dashoneform');
    Route::get('/Table', [TrainingController::class, 'table'])->name('dashonetable');
    // Route::get('/blank', [TrainingController::class, 'blank'])->name('dashoneblank');
    // Route::get('/formtable', [DashboardOneController::class, 'formtable'])->name('dashoneformtable');
});
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route User
Route::middleware(['auth','user-role:user'])->group(function()
{
    Route::get("/home",[HomeController::class, 'userHome'])->name("home");
});
// Route Editor
Route::middleware(['auth','user-role:editor'])->group(function()
{
    Route::get("/editor/home",[HomeController::class, 'editorHome'])->name("editor.home");
});
// Route Admin
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/home",[HomeController::class, 'adminHome'])->name("admin.home");
});
