<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoteksController extends Controller
{
 public function hakkimizda(){



    return view ('pages.kurumsal.hakkimizda');


 }

 public function kunye(){



    return view ('pages.kurumsal.kunye');


 }


 public function misyon(){



    return view ('pages.kurumsal.misyon');


 }

 public function vizyon(){



    return view ('pages.kurumsal.vizyon');


 }

 public function ticari(){



    return view ('pages.kurumsal.ticari');


 }
 public function tarihce(){



    return view ('pages.kurumsal.tarihce');


 }
 public function cevre(){



    return view ('pages.uretim.cevre');


 }

 public function ihracat(){



    return view ('pages.uretim.ihracat');


 }
 public function kapasite(){



    return view ('pages.uretim.kapasite');


 }
 public function sertifikalar(){



    return view ('pages.uretim.sertifikalar');


 }
 public function iletisim(){



    return view ('pages.kurumsal.iletisim');


 }

 public function sustainability(){



    return view ('sustainability');


 }

 public function iplik(){



    return view ('kumaslar.iplik');


 }

 public function ormeboyalikumas(){



    return view ('kumaslar.ormeboyalikumas');


 }

 public function ormehamkumas(){



    return view ('kumaslar.ormehamkumas');


 }

 public function inovatifkumas(){



    return view ('kumaslar.inovatif');


 }

 
 public function yenikumaslar(){



   return view ('kumaslar.inovatif');


}
}

