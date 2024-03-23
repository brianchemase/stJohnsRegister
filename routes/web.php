<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;

use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\UserController;

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

Route::get('/qms', function () {
    return view('index');
});
Route::get('/', function () {
    return view('collegelanding');
});

Route::get('/homepage', function () {
    return view('staticpages.home');
}); 
Route::post('/submit-form', [VisitorController::class, 'store'])->name('submit-form');

Route::any('/updateSelfpass', [UserController::class, 'changeUsersPassword'])->name('changeUsersPassword');



//Route::get('/visitors', function () {    return view('visitors');});

Route::get('/visitors', [VisitorController::class, 'showVisitors']);

Route::get('/ViewCert', [CertificatesController::class, 'MakeCertificate']);

Route::get('/GetCert', [CertificatesController::class, 'getcertificate'])->name('GetCert');
Route::post('/GetCerts', [CertificatesController::class, 'getcert'])->name('generate-cert');

Route::get('/send-certification/{idnumbers}', [CertificatesController::class, 'Emailcert']);

Auth::routes();
Route::middleware(['user-role:admin'])->group(function()
//Route::group(['prefix' => 'training', 'auth','user-role:admin'], function() {
{
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


    Route::get('/Listusers', [UserController::class, 'index'])->name('users.index');
    Route::post('/update-user', [UserController::class, 'updateUser'])->name('update_user');
    Route::any('/users/{user}/change-password', [UserController::class, 'changePassword'])->name('change_password');
    Route::post('/Userregister', [UserController::class, 'registerUser'])->name('registerUser');
});
});
//}


    


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
Route::middleware(['auth','user-role:training'])->group(function()
{
    Route::get("/admin/home",[HomeController::class, 'adminHome'])->name("admin.home");
});
