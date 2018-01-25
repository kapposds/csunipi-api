<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        // \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'alias' => 'president-message',
                'category' => 'department',
                'viewtitle' => 'Μήνυμα Προέδρου',
                'title' => 'Μήνυμα του Προέδρου του Τμήματος Πληροφορικής Καθηγητή Γεώργιου Τσιχριντζή',
                'content' => '<div class="itemFullText">
Σας καλωσορίζω στην ιστοσελίδα του Τμήματος Πληροφορικής της Σχολής Τεχνολογιών Πληροφορικής και Επικοινωνιών του Πανεπιστημίου Πειραιώς. Εδώ θα βρείτε πληροφορίες σχετικά με τις ερευνητικές και διδακτικές δραστηριότητες, αλλά και τις διοικητικές δομές, του Τμήματός μας.</p>
<p align="JUSTIFY">
Το Τμήμα Πληροφορικής ιδρύθηκε με σκοπό την διεξαγωγή έρευνας σε τομείς της σύγχρονης Πληροφορικής και την κατάρτιση νέων επιστημόνων Πληροφορικής που θα συνεισφέρουν στην οικονομία της χώρας μας.</p>
<p align="JUSTIFY">
Η Πληροφορική είναι μια <strong>συναρπαστική</strong> επιστήμη. Η θεωρητική πλευρά της έχει μεγάλο βάθος. Παράλληλα, το εύρος εφαρμογών της σύγχρονης Πληροφορικής είναι τεράστιο και συνεχώς επεκτείνεται, καθώς συναντούμε εφαρμογές Πληροφορικής σε κάθε έκφραση της καθημερινότητάς μας. Παρά την τεράστια αυτή ανάπτυξή της, μπορεί κανείς να πει ότι η Πληροφορική, ως επιστήμη και τεχνολογία, έχει ακόμα πολύ δρόμο να διανύσει. Αυτό το γεγονός δημιουργεί τεράστιες ευκαιρίες καριέρας για νέους, τόσο σε διάφορες εταιρίες Πληροφορικής, όσο και στη μέση εκπαίδευση, όσο και στον Πανεπιστημιακό χώρο, καθώς τα ακαδημαϊκά Τμήματα Πληροφορικής αποτελούν τα ταχύτερα αναπτυσσόμενα Τμήματα των Πανεπιστημίων. Εκτιμώ ότι οι ευκαιρίες αυτές θα υφίστανται για αρκετές δεκαετίες ακόμα, καθώς η Πληροφορική θα επεκτείνεται συνεχώς σε νέα πεδία εφαρμογών.</p>
<p align="JUSTIFY">
Το Τμήμα Πληροφορικής του Πανεπιστημίου Πειραιώς αποτελεί ένα από τα κορυφαία Τμήματα Πληροφορικής στη χώρα μας, με διεθνή αναγνώριση και μεγάλο εύρος δραστηριοτήτων. Λειτουργεί ήδη 25 χρόνια και σε αυτό ασκούν διδακτικά και ερευνητικά καθήκοντα περίπου 25 Καθηγητές διαφόρων βαθμίδων, καθώς και αριθμός έκτακτων συνεργατών. Διαθέτουμε πολύ αξιόλογα προγράμματα προπτυχιακών και μεταπτυχιακών σπουδών. Παράλληλα, έχουμε κατακτήσει μια σημαντική θέση ερευνητικού συμμέτοχου στις διεθνείς επιστημονικές εξελίξεις. Τα γεγονότα αυτά σε συνδυασμό με τη μεγάλη απορροφητικότητα των αποφοίτων μας, έχουν καταστήσει το Τμήμα μας περιζήτητο τόσο για προπτυχιακές όσο και για μεταπτυχιακές σπουδές.</p>
<p align="JUSTIFY">
Τα <em>προπτυχιακά</em> προγράμματα σπουδών προσφέρουν στους φοιτητές που τα παρακολουθούν κάποια εξειδίκευση πρώτου επιπέδου με διάφορα μαθήματα επιλογής και με τη λειτουργία τριών κατευθύνσεων που επικεντρώνονται σε κάποιους τομείς της Πληροφορικής. Όμως, ο στόχος των προπτυχιακών προγραμμάτων σπουδών Πληροφορικής είναι η παρουσίαση του <em>συνόλου</em> της επιστήμης της Πληροφορικής και όχι η ειδίκευση σε κάποιον τομέα της. Ειδίκευση μπορεί να παρασχεθεί μόνο στα πλαίσια ενός προγράμματος <em>μεταπτυχιακών</em> σπουδών Πληροφορικής. Καθώς η Πληροφορική έχει ήδη διανύσει πέντε δεκαετίες εξέλιξής της, έχει καταστεί αναγκαία η εξειδίκευση μέσω παρακολούθησης κάποιου προγράμματος μεταπτυχιακών σπουδών Πληροφορικής.</p>
<p align="JUSTIFY">
Το Πρόγραμμα Μεταπτυχιακών Σπουδών (ΠΜΣ) σε «Προηγµένα Συστήµατα Πληροφορικής» λειτουργεί από το ακαδηµαϊκό έτος 2004-2005 και έχει ως αντικείµενο τη συντονισµένη ανάπτυξη και οργάνωση των ερευνητικών κατευθύνσεων της επιστήµης της Πληροφορικής και ειδικότερα αυτών που αφορούν σε τοµείς υψηλής προτεραιότητας για τη χώρα µας. Το περιεχόµενο και η φυσιογνωµία του προγράµµατος έχει διαµορφωθεί έτσι ώστε να ανταποκρίνεται µε επιτυχία στις ιδιαίτερες επιστηµονικές ανάγκες που προκαλεί η ταχύτατη εξέλιξη της Πληροφορικής σε ευρωπαϊκό και διεθνές επίπεδο.</p>
<p align="JUSTIFY">
Θέλω να τονίσω δύο πολύ σημαντικές ιδιαιτερότητες του ΠΜΣ : 1) σε αντίθεση με ΠΜΣ άλλων ιδρυμάτων διάρκειας δύο ετών, η κανονική διάρκεια των μεταπτυχιακών σπουδών του δικού μας ΠΜΣ είναι τρία ακαδημαϊκά εξάμηνα από τα οποία τα δύο πρώτα ακαδημαϊκά εξάμηνα αφιερώνονται στη διδασκαλία μαθημάτων και το τρίτο ακαδημαϊκό εξάμηνο αφιερώνεται στην εκπόνηση μεταπτυχιακής διατριβής και 2) οι κατευθύνσεις του είναι πρωτοποριακές για την Ελλάδα και με μεγάλη σημασία για την αγορά εργασίας και για έρευνα. Οι κατευθύνσεις αυτές δεν προσφέρονται από άλλα Πανεπιστημιακά Ιδρύματα της χώρας μας αλλά μόνο από Πανεπιστήμια του εξωτερικού με ιδιαίτερα μεγάλο κόστος.</p>
<p align="JUSTIFY">
Πιο συγκεκριμένα, το ΠΜΣ απονέµει Μεταπτυχιακό ∆ίπλωµα Ειδίκευσης (Μ∆Ε) σε μια τις επόμενες έξι κατευθύνσεις: (1) ∆ικτυοκεντρικά και Τηλεπικοινωνιακά Συστήµατα, (2) Ευφυείς Τεχνολογίες Επικοινωνίας Ανθρώπου – Υπολογιστή, (3) Επιχειρηματική Ευφυΐα, (4) Προηγμένες Τεχνολογίες Ανάπτυξης Λογισμικού, (5) Τεχνολογίες Διαχείρισης Ασφάλειας και (6) Τεχνολογίες Ηλεκτρονικών και Κινητών Υπηρεσιών. Οι κατευθύνσεις αυτές καλύπτουν σύγχρονες τάσεις της Πληροφορικής αναφορικά τόσο με την αγορά εργασίας όσο και με τη δυνατότητα εμβάθυνσης σε τομείς της Πληροφορικής με ευρύ ερευνητικό ενδιαφέρον.</p>
<p align="JUSTIFY">
Δεκτοί γίνονται, μετά από επιλογή, κυρίως, πτυχιούχοι Πανεπιστημίων και ΤΕΙ οι οποίοι έχουν <em>ήδη</em> μια αρκετά καλή γνώση της Πληροφορικής από τις προπτυχιακές σπουδές τους και επιθυμούν να αποκτήσουν μια περαιτέρω ειδίκευση σε κλάδους της Πληροφορικής. Επομένως, αυτό το ΠΜΣ απευθύνεται κυρίως σε πτυχιούχους Πληροφορικής και ίσως κάποιων σχολών πολύ συναφών με την Πληροφορική.</p>
<p align="JUSTIFY">
Από το έτος 2007 στο Τμήμα μας λειτουργεί και το ΠΜΣ στην «Πληροφορική». Σε αντίθεση με άλλα ΠΜΣ σε αντικείμενα Πληροφορικής σε εκπαιδευτικά ιδρύματα της χώρας μας, το ΠΜΣ στην «Πληροφορική» απευθύνεται κυρίως σε αποφοίτους σχολών ΑΕΙ ή ΤΕΙ άλλων της Πληροφορικής, οι οποίοι επιθυμούν να αποκτήσουν γνώση στα θέματα Πληροφορικής σε επίπεδο μεταπτυχιακών σπουδών. Η ανάγκη για αυτό το πρόγραμμα σπουδών υπαγορεύθηκε από την υψηλού βαθμού διαθεματικότητα της Πληροφορικής και από τις σύγχρονες απαιτήσεις υψηλής γνώσης της Πληροφορικής σε όλες τις ειδικότητες επιστημών. Στην σημερινή εποχή, όλες οι επιστήμες χρειάζονται ειδικές και υψηλές γνώσεις Πληροφορικής που μπορούν να αποκτηθούν από ένα μεταπτυχιακό πρόγραμμα σαν το δικό μας.</p>
<p align="JUSTIFY">
Το ΠΜΣ «Πληροφορική» καλύπτει ένα πολύ μεγάλο εκπαιδευτικό κενό. Μέχρι πριν τη λειτουργία του δικού μας ΠΜΣ, κάποιος επιστήμονας μπορούσε να παρακολουθήσει αντίστοιχες μεταπτυχιακές σπουδές μόνο στο εξωτερικό (Αγγλία, Αμερική κ.ά.), όπου τέτοια προγράμματα λειτουργούσαν με μεγάλη επιτυχία από 30ετίας. Τα προγράμματα αυτά αποκαλούνται “M.Sc. conversion courses” και προσφέρονται από Τμήματα Πληροφορικής κορυφαίων Ευρωπαϊκών και Αμερικανικών Πανεπιστημίων. Το πρόγραμμά μας έχει συνταχθεί με βάση αυτά τα πρότυπα. Το Τμήμα Πληροφορικής του Πανεπιστημίου Πειραιώς παρέχει τη δυνατότητα να μπορεί πλέον κάποιος να παρακολουθήσει ένα αντίστοιχο πρόγραμμα σπουδών στην Ελλάδα.</p>
<p align="JUSTIFY">
Εκτός των προπτυχιακών και μεταπτυχιακών προγραμμάτων σπουδών, το Τμήμα μας προσφέρει και τη δυνατότητα εκπόνησης <em>διδακτορικής διατριβής</em>. Στα χρόνια λειτουργίας του Τμήματος, ολοκληρώθηκαν με επιτυχία περίπου 60 διδακτορικές διατριβές. Πολλοί από αυτούς τους 60 Διδάκτορες του Τμήματός μας αποτελούν σήμερα μέλη του Διδακτικού και Ερευνητικού Προσωπικού ελληνικών και ξένων Πανεπιστημίων και ΤΕΙ, καθώς και ερευνητικών κέντρων. Αυτή τη στιγμή, είναι εγγεγραμμένοι στο Τμήμα περίπου 80 Υποψήφιοι Διδάκτορες. Η θεματολογία των διδακτορικών ερευνών που βρίσκονται σε εξέλιξη καλύπτει ένα μεγάλο φάσμα των ερευνητικών περιοχών της σύγχρονης Πληροφορικής. Στα πλαίσια της εκπόνησης διδακτορικών διατριβών, οι υποψήφιοι διδάκτορες προετοιμάζουν και παρουσιάζουν πρωτότυπες εργασίες οι οποίες ανακοινώνονται σε διεθνή συνέδρια και δημοσιεύονται σε έγκριτα επιστημονικά περιοδικά πολύ υψηλού κύρους. Χαρακτηριστικό του πολύ υψηλού επιπέδου της έρευνας που επιτελείται στο Τμήμα μας είναι το γεγονός ότι τα τελευταία χρόνια, εργασίες των μελών ΔΕΠ του Τμήματος και υποψηφίων διδακτόρων έχουν όχι μόνο δημοσιευθεί, αλλά και διακριθεί σε αναγνωρισμένα διεθνή συνέδρια και περιοδικά, είτε λαμβάνοντας βραβεία «καλύτερων εργασιών», είτε λαμβάνοντας κολακευτικά σχόλια από άλλους ερευνητές σε άλλες χώρες, είτε λαμβάνοντας σημαντικές θέσεις στις λίστες των πιο πολυδιαβασμένων άρθρων των επιστημονικών περιοδικών στα οποία δημοσιεύθηκαν. Το επίτευγμα αυτό δεν είναι αμελητέο, καθώς τα διεθνή συνέδρια και περιοδικά δημοσιεύουν άρθρα σε καταξιωμένους επιστημονικούς εκδοτικούς οίκους που εδρεύουν σε χώρες που θεωρούνται τεχνολογικά πιο εξελιγμένες από τη χώρα μας και όπου παρουσιάζονται εργασίες από πολλές άλλες χώρες του κόσμου.</p>
<p align="JUSTIFY">
Επιπρόσθετα προς τα παραπάνω, το Τμήμα Πληροφορικής παρέχει τη δυνατότητα εξ αποστάσεως παρακολούθησης σεμιναριακών μαθημάτων σε πολλά τρέχοντα θέματα της Πληροφορικής που απευθύνονται σε ευρύ κοινό. Τα σεμιναριακά μαθήματα πραγματοποιούνται μέσω ενός προγράμματος e-learning.</p>
<p align="JUSTIFY">
Το Τμήμα Πληροφορικής έχει αναγνωριστεί μέσω σημαντικών διεθνών διακρίσεων. Μια τέτοια σημαντική διεθνής αναγνώριση αποτυπώνεται στα αποτελέσματα του εργαλείου ακαδημαϊκής αναζήτησης <a href="http://academic.research.microsoft.com/RankList?entitytype=7&amp;topDomainID=2&amp;subDomainID=23&amp;last=0&amp;start=1&amp;end=100" target="_blank" title="" location=yes>Microsoft Academic Search</a> που έχει κατασκευάσει η γνωστή εταιρία Microsoft. Σύμφωνα με το εργαλείο, το Πανεπιστήμιο Πειραιώς κατατάσσεται στα 100 κορυφαία του κόσμου, συγκεκριμένα στη θέση 73, για την περιοχή της Πληροφορικής Computer Education, ανάμεσα σε 4.333 άλλα πανεπιστήμια και οργανισμούς διεθνώς. Το ίδιο εργαλείο κατατάσσει μέλη του Τμήματος Πληροφορικής στους κορυφαίους επιστήμονες της περιοχής αυτής και άλλων περιοχών ανάμεσα σε δεκάδες χιλιάδες επιστημόνων διεθνώς.</p>
<p align="JUSTIFY">
Πρόσφατα, στις 29 Απριλίου 2014, το Τμήμα μας είχε την ιδιαίτερη τιμή να δεχτεί στην ακαδημαϊκή του κοινότητα τον κορυφαίο Έλληνα επιστήμονα της Πληροφορικής, τον <a href="https://el.wikipedia.org/wiki/Ζοζέφ_Σιφακίς" target="_blank" title="">Καθηγητή κ. Ιωσήφ Σηφάκη</a>, αναγορεύοντάς τον σε Επίτιμο Διδάκτορά του. Ο κ. Ι. Σηφάκης είναι ο μοναδικός Έλληνας και από τους λίγους Ευρωπαίους Επιστήμονες που έχει λάβει το βραβείο Turing, το οποίο θεωρείται ισότιμο με Νόμπελ για την Πληροφορική.</p>
<p align="JUSTIFY">
Ευχαριστούμε πολύ για το ενδιαφέρον σας για το Τμήμα Πληροφορικής του Πανεπιστημίου Πειραιώς. Θα χαρούμε πολύ να παράσχουμε περισσότερες πληροφορίες για το Τμήμα μας σε κάθε ενδιαφερόμενο, είτε τηλεφωνικά (210-4142263 και 210-4142105) είτε μέσω του ιστότοπου <a href="http://www.cs.unipi.gr/index.php?lang=el" target="_blank" title="">http://www.cs.unipi.gr</a>.</p>
<table  class="president-message" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
<tbody>
<tr>
<td  class="president-message" style="text-align: center; width: 50%;">
&nbsp;</td>
<td  class="president-message" style="text-align: right; width: 50%;">
<p>
Με θερμούς χαιρετισμούς,<br>
<br>
<br>
Δρ. Γεώργιος Τσιχριντζής<br>
<br>
Καθηγητής<br>
Πρόεδρος Τμήματος Πληροφορικής</p>
</td>
</tr>
</tbody>
</table>
<p>
&nbsp;</p>	  </div>',
            'views' => 438,
            'created_at' => '2016-12-12 12:08:32',
            'updated_at' => '2017-04-29 15:44:03',
        ),
        1 => 
        array (
            'id' => 2,
            'alias' => 'distinctions',
            'category' => 'department',
            'viewtitle' => 'Διακρίσεις',
            'title' => 'Διακρίσεις',
            'content' => 'Το Τμήμα Πληροφορικής έχει λάβει τις παρακάτω διακρίσεις:',
            'views' => 124,
            'created_at' => '2016-12-12 12:08:32',
            'updated_at' => '2017-04-27 16:03:43',
        ),
        2 => 
        array (
            'id' => 3,
            'alias' => 'department-news',
            'category' => 'news',
            'viewtitle' => 'Νέα του Τμήματος',
            'title' => 'Νέα του Τμήματος',
            'content' => 'Τελευταία νέα και ανακοινώσεις:',
            'views' => 267,
            'created_at' => '2016-12-14 10:25:45',
            'updated_at' => '2017-04-29 15:44:08',
        ),
        3 => 
        array (
            'id' => 4,
            'alias' => 'administrative-acts',
            'category' => 'news',
            'viewtitle' => 'Διοικητικές Πράξεις',
            'title' => 'Διοικητικές Πράξεις',
            'content' => 'Διοικητικές πράξεις του τμήματος:',
            'views' => 86,
            'created_at' => '2016-12-18 18:02:28',
            'updated_at' => '2017-04-27 15:13:25',
        ),
        4 => 
        array (
            'id' => 5,
            'alias' => 'undergraduate-overview',
            'category' => 'studies',
            'viewtitle' => 'Συνοπτική Παρουσίαση',
            'title' => 'Προπτυχιακό Πρόγραμμα Σπουδών',
            'content' => '<div class="itemFullText">
<p>
Το νέο Πρόγραμμα Σπουδών του Τμήματος Πληροφορικής του Πανεπιστημίου Πειραιώς φιλοδοξεί να εκπληρώσει στο μέγιστο δυνατό βαθμό τους εξής στόχους:</p>
<ul>
<li style="list-style-type: disc;">
Ευθυγράμμιση με τους τρέχοντες προσανατολισμούς που ορίζονται διεθνώς στον τομέα της Πληροφορικής και τις ανάγκες της αγοράς εργασίας,</li>
<li style="list-style-type: disc;">
Προσδιορισμό της ιδιαίτερης ταυτότητας του Τμήματος με την καθιέρωση κατευθύνσεων που θα θεραπεύουν επαρκώς, για προπτυχιακό επίπεδο, τομείς-αιχμής της Πληροφορικής,</li>
<li style="list-style-type: disc;">
Δημιουργία «φυτώριου» νέων επιστημόνων με την ενσωμάτωση σύγχρονων γνωστικών αντικειμένων και μαθημάτων σε συνδυασμό και με τα ήδη δρομολογημένα Προγράμματα Μεταπτυχιακών Σπουδών του Τμήματος.</li>
</ul>
<p>
Για την εκπλήρωση των παραπάνω στόχων στο νέο Πρόγραμμα Σπουδών εισάγονται στα δύο τελευταία έτη σπουδών τρεις κατευθύνσεις,</p>
<ul>
<li style="list-style-type: disc;">
Τεχνολογία Λογισμικού και Ευφυή Συστήματα</li>
<li style="list-style-type: disc;">
Διαδικτυακά και Υπολογιστικά Συστήματα</li>
<li style="list-style-type: disc;">
Πληροφοριακά Συστήματα και Υπηρεσίες</li>
</ul>
<p>
οι οποίες θα παρέχουν την απαραίτητη και κρίσιμη, για προπτυχιακό επίπεδο, εξειδίκευση που θα καθιστά τους φοιτητές του Τμήματος ανταγωνιστικούς στην αγορά εργασίας και έτοιμους να αντεπεξέλθουν στις σύγχρονες απαιτήσεις στον επιστημονικό στίβο της Πληροφορικής.</p>	  </div>',
            'views' => 73,
            'created_at' => '2016-12-20 13:43:57',
            'updated_at' => '2017-04-27 14:48:54',
        ),
        5 => 
        array (
            'id' => 6,
            'alias' => 'undergraduate-course-structure',
            'category' => 'studies',
            'viewtitle' => 'Δομή Προγράμματος',
            'title' => 'Δομή Προγράμματος',
            'content' => '<div class="itemBody">

<!-- Plugins: BeforeDisplayContent -->

<!-- K2 Plugins: K2BeforeDisplayContent -->


<!-- Item text -->
<div class="itemFullText">
<p style="text-align: justify;">
Τα πρώτα τέσσερα (4) εξάμηνα (1ο και 2ο έτος) είναι κοινά για όλους τους φοιτητές του Τμήματος. Στα τέσσερα (4) τελευταία εξάμηνα (3ο και 4ο έτος) καθιερώνονται τρεις κατευθύνσεις:</p>
<p style="text-align: justify;">
<strong>Τεχνολογία Λογισμικού και Ευφυή Συστήματα (ΤΛΕΣ):</strong>Η ταχύτατη εξέλιξη των υπολογιστών που σηματοδοτείται από αυξημένη υπολογιστική ισχύ, αυξημένη χωρητικότητα μνήμης και εξειδικευμένων περιφερειακών συσκευών, έχει επιτρέψει την διάδοση προηγμένων και απαιτητικών προγραμματιστικών τεχνικών ακόμα και σε επίπεδο προσωπικού υπολογιστή. Οι τεχνικές αυτές θεραπεύονται από τα επιστημονικά πεδία της Τεχνολογίας Λογισμικού, των Γραφικών και της Εικονικής Πραγματικότητας, της Τεχνητής Νοημοσύνης και των Ευφυών Συστημάτων, της Αναγνώρισης Προτύπου καθώς και από τις πλέον προηγμένες τεχνικές Επικοινωνίας Ανθρώπου Υπολογιστή. Η κατεύθυνση αυτή φιλοδοξεί να προσφέρει στους προπτυχιακούς φοιτητές αφ’ ενός το απαραίτητο υπόβαθρο, αφ’ ετέρου τις ιδιαίτερες εκείνες γνώσεις ώστε να μπορούν να ανταποκριθούν αναπτυξιακά και ερευνητικά στην ευρύτερη περιοχή των μοντέρνων και προηγμένων τεχνικών ανάπτυξης λογισμικού.</p>
<p style="text-align: justify;">
<strong>Διαδικτυακά και Υπολογιστικά Συστήματα (ΔΥΣ):</strong>Η σύγκλιση των τεχνολογιών πληροφορικής και τηλεπικοινωνιών, η εκρηκτική ανάπτυξη του Διαδικτύου και οι εκθετικές αλλαγές στην πολυπλοκότητα και στις ταχύτητες των συστημάτων που υποστηρίζουν τις παραπάνω τεχνολογίες, απαιτεί την απόκτηση εξειδικευμένων γνώσεων στους επιστημονικούς τομείς των διαδικτυακών ή δικτυοκεντρικών συστημάτων και των υπολογιστικών συστημάτων που είναι απαραίτητα για την εξάπλωση των τεχνολογιών αυτών. Το πρόγραμμα σπουδών στην κατεύθυνση αυτή παρέχει τη δυνατότητα στους φοιτητές να αποκτήσουν κατ\' αρχήν το απαραίτητο υπόβαθρο για την κατανόηση, λειτουργία και χρήση των τεχνολογιών αυτών και ύστερα να εφοδιαστούν με τις απαραίτητες δεξιότητες για την ανάπτυξη, συντήρηση και αριστοποίηση συστημάτων που λειτουργούν σε ένα δικτυακό περιβάλλον.</p>
<p style="text-align: justify;">
<strong>Πληροφοριακά Συστήματα και Υπηρεσίες (ΠΣΥ):</strong>Η ανάπτυξη, υλοποίηση και διαχείριση σύγχρονων πληροφοριακών συστημάτων απαιτεί ένα ευρύ φάσμα γνώσεων που αναφέρονται στις τεχνολογίες πληροφορικής και επικοινωνιών, και στη διοίκηση επιχειρήσεων, ώστε τα πληροφοριακά συστήματα να είναι αποδεκτά από τους χρήστες και να ενσωματώνονται επιτυχώς στη λειτουργία των επιχειρήσεων. Σκοπός της κατεύθυνσης αυτής είναι η παροχή προς τους φοιτητές του Τμήματος των αναγκαίων γνώσεων, σε θεωρητικό και πρακτικό επίπεδο, σχετικά με τις μεθοδολογίες και τεχνολογίες ανάπτυξης σύγχρονων πληροφοριακών συστημάτων, τις διαδικασίες διοίκησης έργων που αφορούν στην ανάπτυξη πληροφοριακών συστημάτων, και τις μεθόδους διοίκησης εγκατεστημένων πληροφοριακών συστημάτων. Ενδεικτικά, δίνεται ιδιαίτερη έμφαση σε θέματα μεθοδολογιών ανάλυσης και σχεδιασμού συστημάτων, σχεδίασης και ανάπτυξης αποδοτικών βάσεων δεδομένων, δικτύων υπολογιστών, ανάπτυξης πληροφοριακών συστημάτων με βάση τις επιχειρησιακές διαδικασίες, συστημάτων ροής εργασίας και ασφάλειας πληροφοριών.</p>
<p style="text-align: justify;">
Η δομή του Προγράμματος Σπουδών απεικονίζεται στον πίνακα που ακολουθεί.</p>
<p>
&nbsp;</p>
<table align="center" border="1" cellpadding="1" cellspacing="1" class="table_style_black" style="width: 100%;">
<tbody>
<tr>
<td colspan="2" style="width: 120px; text-align: center; border-color: #000000;">
<span style="font-family: arial,helvetica,sans-serif;">1ο ΕΤΟΣ</span></td>
<td colspan="2" style="text-align: center; border-color: #000000; width: 295px;">
<span style="font-family: arial,helvetica,sans-serif;">2ο ΕΤΟΣ</span></td>
</tr>
<tr>
<td style="width: 120px; text-align: center; border-color: #000000;">
1ο Εξάμηνο</td>
<td style="width: 120px; text-align: center; border-color: #000000;">
2ο Εξάμηνο</td>
<td style="text-align: center; width: 120px; border-color: #000000;">
3ο Εξάμηνο</td>
<td style="text-align: center; width: 138px; border-color: #000000;">
4ο Εξάμηνο</td>
</tr>
<tr>
<td style="width: 120px; text-align: center; border-color: #000000;">
6 υποχρεωτικά μαθήματα</td>
<td style="width: 120px; text-align: center; border-color: #000000;">
6 υποχρεωτικά μαθήματα</td>
<td style="text-align: center; width: 120px; border-color: #000000;">
5 υποχρεωτικά μαθήματα + 1 μάθημα επιλογής από κατάλογο</td>
<td style="text-align: center; width: 138px; border-color: #000000;">
5 υποχρεωτικά μαθήματα + 1 μάθημα επιλογής από κατάλογο</td>
</tr>
<tr>
<td colspan="4" style="width: 609px; border-color: #000000;">
<p style="text-align: center;">
Κοινά για όλους του φοιτητές του Τμήματος</p>
</td>
</tr>
</tbody>
</table>
<p>
&nbsp;</p>
<p>
&nbsp;</p>
<table align="center" border="1" cellpadding="1" cellspacing="1" class="table_style_black" style="width: 100%;">
<tbody>
<tr>
<td colspan="6" style="border-color: rgb(0, 0, 0); text-align: center; width: 606px;">
3ο ΕΤΟΣ</td>
</tr>
<tr>
<td colspan="3" rowspan="1" style="border-color: rgb(0, 0, 0); width: 242px; text-align: center;">
5ο Εξάμηνο</td>
<td colspan="3" rowspan="1" style="border-color: rgb(0, 0, 0); width: 303px; text-align: center;">
6ο Εξάμηνο</td>
</tr>
<tr>
<td style="border-color: rgb(0, 0, 0); width: 102px; text-align: center;">
ΤΛΕΣ</td>
<td style="border-color: rgb(0, 0, 0); width: 74px; text-align: center;">
ΔΥΣ</td>
<td style="border-color: rgb(0, 0, 0); width: 56px; text-align: center;">
ΠΣ</td>
<td style="border-color: rgb(0, 0, 0); width: 95px; text-align: center;">
ΤΛΕΣ</td>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
ΔΥΣ</td>
<td style="border-color: rgb(0, 0, 0); text-align: center; width: 101px;">
ΠΣ</td>
</tr>
<tr>
<td colspan="3" rowspan="1" style="border-color: rgb(0, 0, 0); width: 242px; text-align: center;">
2 μαθήματα κορμού</td>
<td colspan="3" rowspan="1" style="border-color: rgb(0, 0, 0); width: 303px; text-align: center;">
2 μαθήματα κορμού</td>
</tr>
<tr>
<td style="border-color: rgb(0, 0, 0); width: 102px; text-align: center;">
3 υποχρεωτικά μαθήματα κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); width: 74px; text-align: center;">
3 υποχρεωτικά μαθήματα κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); width: 56px; text-align: center;">
3 υποχρεωτικά μαθήματα κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); width: 95px; text-align: center;">
3 υποχρεωτικά μαθήματα κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
3 υποχρεωτικά μαθήματα κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); text-align: center; width: 101px;">
3 υποχρεωτικά μαθήματα κατεύθυνσης</td>
</tr>
<tr>
<td style="border-color: rgb(0, 0, 0); width: 102px; text-align: center;">
1 μάθημα επιλογής από κατάλογο ή από υποχρεωτικά άλλης κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); width: 74px; text-align: center;">
1 μάθημα επιλογής από κατάλογο ή από υποχρεωτικά άλλης κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); width: 56px; text-align: center;">
1 μάθημα επιλογής από κατάλογο ή από υποχρεωτικά άλλης κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); width: 95px; text-align: center;">
1 μάθημα επιλογής από κατάλογο ή από υποχρεωτικά άλλης κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
1 μάθημα επιλογής από κατάλογο ή από υποχρεωτικά άλλης κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); text-align: center; width: 101px;">
1 μάθημα επιλογής από κατάλογο ή από υποχρεωτικά άλλης κατεύθυνσης</td>
</tr>
</tbody>
</table>
<p>
&nbsp;</p>
<p>
&nbsp;</p>
<table align="center" border="1" cellpadding="1" cellspacing="1" class="table_style_black" style="width: 100%;">
<tbody>
<tr>
<td colspan="6" style="border-color: rgb(0, 0, 0); text-align: center; width: 604px;">
4ο ΕΤΟΣ</td>
</tr>
<tr>
<td colspan="3" rowspan="1" style="border-color: rgb(0, 0, 0); text-align: center;">
7ο Εξάμηνο</td>
<td colspan="3" rowspan="1" style="border-color: rgb(0, 0, 0); text-align: center; width: 301px;">
8ο Εξάμηνο</td>
</tr>
<tr>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
ΤΛΕΣ</td>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
ΔΥΣ</td>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
ΠΣ</td>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
ΤΛΕΣ</td>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
ΔΥΣ</td>
<td style="border-color: rgb(0, 0, 0); text-align: center; width: 99px;">
ΠΣ</td>
</tr>
<tr>
<td colspan="6" style="border-color: rgb(0, 0, 0); text-align: center; width: 604px;">
ΠΤΥΧΙΑΚΗ ΕΡΓΑΣΙΑ</td>
</tr>
<tr>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
3 υποχρεωτικά μαθήματα κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
3 υποχρεωτικά μαθήματα κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
3 υποχρεωτικά μαθήματα κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
3 υποχρεωτικά μαθήματα κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
3 υποχρεωτικά μαθήματα κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); text-align: center; width: 99px;">
3 υποχρεωτικά μαθήματα κατεύθυνσης</td>
</tr>
<tr>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
2 μάθημα επιλογής από κατάλογο ή από υποχρεωτικά άλλης κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
2 μάθημα επιλογής από κατάλογο ή από υποχρεωτικά άλλης κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
2 μάθημα επιλογής από κατάλογο ή από υποχρεωτικά άλλης κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
2 μάθημα επιλογής από κατάλογο ή από υποχρεωτικά άλλης κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); text-align: center;">
2 μάθημα επιλογής από κατάλογο ή από υποχρεωτικά άλλης κατεύθυνσης</td>
<td style="border-color: rgb(0, 0, 0); text-align: center; width: 99px;">
2 μάθημα επιλογής από κατάλογο ή από υποχρεωτικά άλλης κατεύθυνσης</td>
</tr>
</tbody>
</table>
<p>
&nbsp;</p>
<p style="text-align: justify;">
Στο 5ο και το 6ο εξάμηνο όλες οι κατευθύνσεις έχουν δύο (2) κοινά μαθήματα (μαθήματα κορμού), από τρία υποχρεωτικά μαθήματα κατεύθυνσης και ένα μάθημα επιλογής. Σε κάθε κατεύθυνση, η επιλογή μπορεί να γίνεται από ένα κατάλογο μαθημάτων επιλογής που προσφέρονται στο αντίστοιχο εξάμηνο ή από τα υποχρεωτικά μαθήματα άλλης κατεύθυνσης.</p>
<p style="text-align: justify;">
Στο 7ο και 8ο εξάμηνο εκτείνεται η πτυχιακή εργασία, η οποία ισοδυναμεί με 2 μαθήματα ανά εξάμηνο (τέσσερα μαθήματα συνολικά). Κάθε κατεύθυνση έχει τρία (3) υποχρεωτικά μαθήματα της κατεύθυνσης και δύο (2) μαθήματα επιλογής. Σε κάθε κατεύθυνση, η επιλογή μπορεί να γίνεται από ένα κατάλογο μαθημάτων επιλογής που προσφέρονται στο αντίστοιχο εξάμηνο ή από τα υποχρεωτικά μαθήματα άλλης κατεύθυνσης.</p>	  </div>
<!-- Plugins: AfterDisplayContent -->

<!-- K2 Plugins: K2AfterDisplayContent -->

<div class="clr"></div>
</div>',
            'views' => 53,
            'created_at' => '2016-12-20 14:08:12',
            'updated_at' => '2017-04-27 11:37:51',
        ),
        6 => 
        array (
            'id' => 7,
            'alias' => 'undergraduate-module-list',
            'category' => 'studies',
            'viewtitle' => 'Αναλυτικό Πρόγραμμα',
            'title' => 'Αναλυτικό Πρόγραμμα',
            'content' => '
<div class="itemBody">

<!-- Plugins: BeforeDisplayContent -->

<!-- K2 Plugins: K2BeforeDisplayContent -->


<!-- Item text -->
<div class="itemFullText">
<p>
<span style="font-size:11px;">(Υ: Υποχρεωτικό, Ξ.Γ.: Ξένη Γλώσσα, Ε: Επιλογής, Κ: Κορμού, Υ(Κ): Υποχρεωτικό Κατεύθυνσης)</span></p>
<table border="1" cellpadding="0" cellspacing="0" class="table_style_green">
<tbody>
<tr>
<td colspan="5" style="width:670px;">
<h3 style="text-align: center;">
Πρώτο Εξάμηνο</h3>
</td>
</tr>
<tr>
<td style="width: 180px;">
<p align="center">
<em>Τίτλος Μαθήματος</em></p>
</td>
<td style="width: 86px;">
<p align="center">
<em>Κατηγορία Μαθήματος</em></p>
</td>
<td style="width:145px;">
<p align="center">
<em>Ώρες Διδασκαλίας / Εργαστηρίων / Φροντιστηρίων (εβδ.)</em></p>
</td>
<td style="width:84px;">
<p align="center">
<em>Πιστωτικές Μονάδες</em></p>
</td>
<td style="width:141px;">
<p align="center">
<em>Διδάσκοντες</em></p>
</td>
</tr>
<tr>
<td style="width: 180px;">
<p align="center">
<strong>ΛΟΓΙΚΗ ΣΧΕΔΙΑΣΗ ΨΗΦΙΑΚΩΝ ΣΥΣΤΗΜΑΤΩΝ</strong></p>
</td>
<td style="width: 86px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Μ. Ψαράκης</p>
</td>
</tr>
<tr>
<td style="width: 180px;">
<p align="center">
<strong>ΑΝΑΛΥΣΗ Ι</strong></p>
</td>
<td style="width: 86px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΦΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Α. Σαπουνάκης</p>
</td>
</tr>
<tr>
<td style="width: 180px;">
<p align="center">
<strong>ΑΡΧΕΣ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟΥ</strong></p>
</td>
<td style="width: 86px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Δ. Αποστόλου</p>
</td>
</tr>
<tr>
<td style="width: 180px;">
<p align="center">
<strong>ΤΕΧΝΟΛΟΓΙΕΣ ΔΙΑΔΙΚΤΥΟΥ</strong></p>
</td>
<td style="width: 86px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Χ. Δουληγέρης</p>
</td>
</tr>
<tr>
<td style="width: 180px;">
<p align="center">
<strong>ΕΙΣΑΓΩΓΗ ΣΤΗΝ ΕΠΙΣΤΗΜΗ ΤΩΝ ΥΠΟΛΟΓΙΣΤΩΝ</strong></p>
</td>
<td style="width: 86px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Θ. Παναγιωτόπουλος<br>
Γ. Τσιχριντζής</p>
</td>
</tr>
<tr>
<td style="width: 180px;">
<p align="center">
<strong>ΜΑΘΗΜΑΤΙΚΑ ΤΩΝ ΥΠΟΛΟΓΙΣΤΩΝ</strong></p>
</td>
<td style="width: 86px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΦΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Α. Σαπουνάκης<br>
Π.-Γ.&nbsp; Τσικούρας</p>
</td>
</tr>
<tr>
<td style="width: 180px;">
<p align="center">
<strong>ΑΓΓΛΙΚΑ Ι</strong></p>
</td>
<td style="width: 86px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:141px;">
<p align="center">
Χ. Τόμπρου</p>
</td>
</tr>
<tr>
<td style="width: 180px;">
<p align="center">
<strong>ΓΑΛΛΙΚΑ Ι</strong></p>
</td>
<td style="width: 86px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:141px;">
<p align="center">
Α. Βουγιουκλίδου</p>
</td>
</tr>
</tbody>
</table>
<p>
&nbsp;</p>
<table border="1" cellpadding="0" cellspacing="0" class="table_style_green">
<tbody>
<tr>
<td colspan="5" style="width:670px;">
<h3 style="text-align: center;">
Δεύτερο Εξάμηνο</h3>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<em>Τίτλος Μαθήματος</em></p>
</td>
<td style="width:82px;">
<p align="center">
<em>Κατηγορία Μαθήματος</em></p>
</td>
<td style="width:145px;">
<p align="center">
<em>&nbsp;Ώρες Διδασκαλίας / Εργαστηρίων / Φροντιστηρίων (εβδ.) </em></p>
</td>
<td style="width:84px;">
<p align="center">
<em>Πιστωτικές Μονάδες</em></p>
</td>
<td style="width:141px;">
<p align="center">
<em>Διδάσκοντες</em></p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΝΑΛΥΣΗ ΙΙ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΦΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Α. Σαπουνάκης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΔΙΑΚΡΙΤΑ ΜΑΘΗΜΑΤΙΚΑ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+1ΦΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Α. Σαπουνάκης<br>
Π.-Γ. Τσικούρας</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΔΟΜΕΣ ΔΕΔΟΜΕΝΩΝ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Χ.&nbsp; Κωνσταντόπουλος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΝΤΙΚΕΙΜΕΝΟΣΤΡΕΦΗΣ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟΣ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Μ. Βίρβου<br>
Π.Δ. 407/80</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΡΧΙΤΕΚΤΟΝΙΚΗ ΥΠΟΛΟΓΙΣΤΩΝ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Μ. Ψαράκης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΕΦΑΡΜΟΣΜΕΝΗ ΑΛΓΕΒΡΑ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+1ΦΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Π.-Γ. Τσικούρας</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΓΓΛΙΚΑ ΙΙ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:141px;">
<p align="center">
Π.&nbsp; Μόρμορη</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΓΑΛΛΙΚΑ ΙΙ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:141px;">
<p align="center">
Α. Βουγιουκλίδου</p>
</td>
</tr>
</tbody>
</table>
<p>
&nbsp;</p>
<table border="1" cellpadding="0" cellspacing="0" class="table_style_green">
<tbody>
<tr>
<td colspan="5" style="width:670px;">
<h3 style="text-align: center;">
Τρίτο Εξάμηνο</h3>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<em>Τίτλος Μαθήματος</em></p>
</td>
<td style="width:82px;">
<p align="center">
<em>Κατηγορία Μαθήματος</em></p>
</td>
<td style="width:145px;">
<p align="center">
<em>&nbsp;Ώρες Διδασκαλίας / Εργαστηρίων / Φροντιστηρίων (εβδ.)</em></p>
</td>
<td style="width:84px;">
<p align="center">
<em>Πιστωτικές Μονάδες</em></p>
</td>
<td style="width:141px;">
<p align="center">
<em>Διδάσκοντες</em></p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΜΑΘΗΜΑΤΙΚΟΣ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟΣ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΦΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Δ. Δεσπότης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΝΤΙΚΕΙΜΕΝΟΣΤΡΕΦΗΣ ΑΝΑΠΤΥΞΗ ΕΦΑΡΜΟΓΩΝ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Μ. Βίρβου<br>
Π.Δ. 407/80</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΛΕΙΤΟΥΡΓΙΚΑ ΣΥΣΤΗΜΑΤΑ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Π. Κοτζανικολάου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΜΕΤΑΓΛΩΤΤΙΣΤΕΣ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Μ. Βίρβου<br>
Α. Πικράκης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΠΙΘΑΝΟΤΗΤΕΣ ΚΑΙ ΣΤΑΤΙΣΤΙΚΗ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Φ. Γεωργιακώδης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΕΦΑΡΜΟΓΕΣ ΘΕΩΡΙΑΣ ΓΡΑΦΗΜΑΤΩΝ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Π.-Γ. Τσικούρας</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΜΑΝΑΤΖΜΕΝΤ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Φ. Νταλιάνης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΕΡΓΟΝΟΜΙΑ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Λ. Λάιος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΔΙΟΙΚΗΣΗ ΣΥΣΤΗΜΑΤΩΝ ΕΦΟΔΙΑΣΜΟΥ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Σ. Μοσχούρης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΔΙΚΑΙΟ ΤΗΣ ΠΛΗΡΟΦΟΡΙΚΗΣ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Α. Σινανιώτη</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΓΓΛΙΚΑ ΙΙΙ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:141px;">
<p align="center">
Χ. Τόμπρου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΓΑΛΛΙΚΑ ΙΙΙ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:141px;">
<p align="center">
Α. Βουγιουκλίδου</p>
</td>
</tr>
</tbody>
</table>
<p>
&nbsp;</p>
<table border="1" cellpadding="0" cellspacing="0" class="table_style_green">
<tbody>
<tr>
<td colspan="5" style="width:670px;">
<h3 style="text-align: center;">
Τέταρτο Εξάμηνο</h3>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<em>Τίτλος Μαθήματος</em></p>
</td>
<td style="width:82px;">
<p align="center">
<em>Κατηγορία Μαθήματος</em></p>
</td>
<td style="width:145px;">
<p align="center">
<em>Ώρες Διδασκαλίας / Εργαστηρίων / Φροντιστηρίων (εβδ.)</em></p>
</td>
<td style="width:84px;">
<p align="center">
<em>Πιστωτικές Μονάδες</em></p>
</td>
<td style="width:141px;">
<p align="center">
<em>Διδάσκοντες</em></p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΔΙΚΤΥΑ ΥΠΟΛΟΓΙΣΤΩΝ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+1ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Χ. Δουληγέρης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΛΓΟΡΙΘΜΟΙ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Χ. Κωνσταντόπουλος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΒΑΣΕΙΣ ΔΕΔΟΜΕΝΩΝ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Ι. Θεοδωρίδης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΠΡΟΓΡΑΜΜΑΤΙΣΜΟΣ ΣΤΟ ΔΙΑΔΙΚΤΥΟ ΚΑΙ ΤΟΝ ΠΑΓΚΟΣΜΙΟ ΙΣΤΟ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Π. Κοτζανικολάου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΡΧΕΣ ΚΑΙ ΕΦΑΡΜΟΓΕΣ ΣΗΜΑΤΩΝ ΚΑΙ ΣΥΣΤΗΜΑΤΩΝ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4+1ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Χ. Δουληγέρης<br>
Γ. Τσιχριντζής</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΘΕΩΡΙΑ ΠΛΗΡΟΦΟΡΙΩΝ ΚΑΙ ΚΩΔΙΚΩΝ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Δ. Πολέμη<br>
Π. Κοτζανικολάου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΕΠΙΧΕΙΡΗΣΙΑΚΗ ΣΤΡΑΤΗΓΙΚΗ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Ι. Πολλάλης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΞΕΝΟΓΛΩΣΣΗ ΟΡΟΛΟΓΙΑ ΤΗΣ ΠΛΗΡΟΦΟΡΙΚΗΣ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Α. Βουγιουκλίδου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΓΓΛΙΚΑ ΙV</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:141px;">
<p align="center">
Χ. Τόμπρου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΓΑΛΛΙΚΑ ΙV</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:141px;">
<p align="center">
Α. Βουγιουκλίδου</p>
</td>
</tr>
</tbody>
</table>
<p>
&nbsp;</p>
<table border="1" cellpadding="0" cellspacing="0" class="table_style_green">
<tbody>
<tr>
<td colspan="5" style="width:670px;">
<h3 style="text-align: center;">
Πέμπτο Εξάμηνο</h3>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<em>Τίτλος Μαθήματος</em></p>
</td>
<td style="width:82px;">
<p align="center">
<em>Κατηγορία Μαθήματος</em></p>
</td>
<td style="width:145px;">
<p align="center">
<em>Ώρες Διδασκαλίας / Εργαστηρίων / Φροντιστηρίων (εβδ.)</em></p>
</td>
<td style="width:84px;">
<p align="center">
<em>Πιστωτικές Μονάδες</em></p>
</td>
<td style="width:141px;">
<p align="center">
<em>Διδάσκοντες</em></p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΛΛΗΛΕΠΙΔΡΑΣΗ ΑΝΘΡΩΠΟΥ ΚΑΙ ΥΠΟΛΟΓΙΣΤΗ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ(Κ)</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Μ. Βίρβου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΠΛΗΡΟΦΟΡΙΑΚΑ ΣΥΣΤΗΜΑΤΑ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ(Κ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Κ. Μεταξιώτης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΝΑΓΝΩΡΙΣΗ ΠΡΟΤΥΠΩΝ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ(Κ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Γ. Τσιχριντζής<br>
Α. Πικράκης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΕΠΙΣΤΗΜΟΝΙΚΗ ΣΥΓΓΡΑΦΗ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ(Κ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:141px;">
<p align="center">
Α. Βουγιουκλίδου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΠΡΟΗΓΜΕΝΗ ΑΡΧΙΤΕΚΤΟΝΙΚΗ ΥΠΟΛΟΓΙΣΤΩΝ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΔΥΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Μ. Ψαράκης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΠΡΟΗΓΜΕΝΑ ΘΕΜΑΤΑ ΕΠΙΚΟΙΝΩΝΙΩΝ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΔΥΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Δ. Βέργαδος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΝΑΛΥΣΗ ΔΕΔΟΜΕΝΩΝ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΠΣΥ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Φ. Γεωργιακώδης<br>
Ι. Σίσκος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΛΟΓΙΚΟΣ ΠΡΟΓΡΑΜΜΑΤΙΣΜΟΣ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΤΛΕΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Δ. Αποστόλου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΣΥΣΤΗΜΑΤΑ ΔΙΑΧΕΙΡΙΣΗΣ ΒΑΣΕΩΝ ΔΕΔΟΜΕΝΩΝ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ(ΠΣΥ,ΤΛΕΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Ι. Θεοδωρίδης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΚΡΥΠΤΟΓΡΑΦΙΑ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4+2ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Δ. Πολέμη</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΣΥΣΤΗΜΑΤΑ ΡΟΗΣ ΕΡΓΑΣΙΩΝ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4+1ΕΡ</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Ν. Ασημακόπουλος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΕΙΔΙΚΑ ΘΕΜΑΤΑ </strong></p>
<p align="center">
<strong>ΕΠΙΧΕΙΡΗΣΙΑΚΗΣ ΕΡΕΥΝΑΣ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Ι. Σίσκος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΘΕΩΡΙΑ ΥΠΟΛΟΓΙΣΜΟΥ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Χ. Κωνσταντόπουλος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΓΓΛΙΚΑ V</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:141px;">
<p align="center">
Χ. Τόμπρου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΓΑΛΛΙΚΑ V</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:141px;">
<p align="center">
Α. Βουγιουκλίδου</p>
</td>
</tr>
</tbody>
</table>
<p>
&nbsp;</p>
<table border="1" cellpadding="0" cellspacing="0" class="table_style_green">
<tbody>
<tr>
<td colspan="5" style="width:670px;">
<h3 style="text-align: center;">
Έκτο Εξάμηνο</h3>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<em>Τίτλος Μαθήματος</em></p>
</td>
<td style="width:82px;">
<p align="center">
<em>Κατηγορία Μαθήματος</em></p>
</td>
<td style="width:145px;">
<p align="center">
<em>Ώρες Διδασκαλίας (εβδ.)</em></p>
</td>
<td style="width:84px;">
<p align="center">
<em>Πιστωτικές Μονάδες</em></p>
</td>
<td style="width:141px;">
<p align="center">
<em>Διδάσκοντες</em></p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΤΕΧΝΟΛΟΓΙΑ ΛΟΓΙΣΜΙΚΟΥ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ(Κ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Μ. Βίρβου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΤΕΧΝΗΤΗ ΝΟΗΜΟΣΥΝΗ </strong></p>
<p align="center">
<strong>ΚΑΙ ΕΜΠΕΙΡΑ ΣΥΣΤΗΜΑΤΑ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ(Κ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Δ. Αποστόλου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΣΧΕΔΙΑΣΗ </strong></p>
<p align="center">
<strong>ΥΠΟΛΟΓΙΣΤΙΚΩΝ ΣΥΣΤΗΜΑΤΩΝ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΔΥΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Μ. Ψαράκης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΔΙΚΤΥΑ ΥΨΗΛΩΝ ΤΑΧΥΤΗΤΩΝ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΔΥΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Δ. Βέργαδος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΟΥΡΕΣ ΑΝΑΜΟΝΗΣ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΔΥΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Φ. Γεωργιακώδης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΣΥΣΤΗΜΙΚΗ ΑΝΑΛΥΣΗ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΠΣΥ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Ν. Ασημακόπουλος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΣΥΣΤΗΜΑΤΑ </strong></p>
<p align="center">
<strong>ΥΠΟΣΤΗΡΙΞΗΣ ΑΠΟΦΑΣΕΩΝ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΠΣΥ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Ι. Σίσκος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΔΙΟΙΚΗΣΗ ΑΣΦΑΛΕΙΑΣ ΣΥΣΤΗΜΑΤΩΝ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΠΣΥ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Δ. Πολέμη</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΣΥΣΤΗΜΑΤΑ ΠΟΛΥΜΕΣΩΝ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΤΛΕΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Γ. Τσιχριντζής<br>
Α. Πικράκης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΓΡΑΦΙΚΑ ΜΕ ΥΠΟΛΟΓΙΣΤΕΣ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΤΛΕΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Θ. Παναγιωτόπουλος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΒΙΟΠΛΗΡΟΦΟΡΙΚΗ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΤΛΕΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Γ. Τσιχριντζής<br>
Α. Πικράκης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΣΥΣΤΗΜΑΤΑ </strong></p>
<p align="center">
<strong>ΥΠΟΣΤΗΡΙΞΗΣ ΟΜΑΔΩΝ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Δ. Δεσπότης<br>
Δ. Αποστόλου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΠΡΟΓΡΑΜΜΑΤΙΣΜΟΣ ΣΥΣΤΗΜΑΤΩΝ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Δ. Βέργαδος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΜΕΤΡΗΣΗ ΑΠΟΔΟΤΙΚΟΤΗΤΑΣ ΣΥΣΤΗΜΑΤΩΝ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Δ. Δεσπότης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΓΓΛΙΚΑ VI </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:141px;">
<p align="center">
Χ. Τόμπρου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΓΑΛΛΙΚΑ VI </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:141px;">
<p align="center">
Α. Βουγιουκλίδου</p>
</td>
</tr>
</tbody>
</table>
<p>
&nbsp;</p>
<table border="1" cellpadding="0" cellspacing="0" class="table_style_green">
<tbody>
<tr>
<td colspan="5" style="width:670px;">
<h3 style="text-align: center;">
Έβδομο Εξάμηνο</h3>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<em>Τίτλος Μαθήματος</em></p>
</td>
<td style="width:82px;">
<p align="center">
<em>Κατηγορία Μαθήματος</em></p>
</td>
<td style="width:145px;">
<p align="center">
<em>Ώρες Διδασκαλίας (εβδ.)</em></p>
</td>
<td style="width:84px;">
<p align="center">
<em>Πιστωτικές Μονάδες</em></p>
</td>
<td style="width:141px;">
<p align="center">
<em>Διδάσκοντες</em></p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΠΤΥΧΙΑΚΗ Α\'</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ(Κ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
&nbsp;</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΚΑΤΑΝΕΜΗΜΕΝΑ ΚΑΙ ΠΟΛΥΕΠΕΞΕΡΓΑΣΤΙΚΑ<br>
ΥΠΟΛΟΓΙΣΤΙΚΑ ΣΥΣΤΗΜΑΤΑ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΔΥΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Χ. Δουληγέρης<br>
Μ. Ψαράκης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΚΙΝΗΤΕΣ</strong><strong>ΚΑΙ</strong><strong>ΑΣΥΡΜΑΤΕΣ</strong><strong>ΕΠΙΚΟΙΝΩΝΙΕΣ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΔΥΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Δ. Βέργαδος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΣΦΑΛΕΙΑ ΠΛΗΡΟΦΟΡΙΑΚΩΝ ΣΥΣΤΗΜΑΤΩΝ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΔΥΣ,ΠΣΥ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Δ. Πολέμη<br>
Π. Κοτζανικολάου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΠΟΘΗΚΕΣ ΔΕΔΟΜΕΝΩΝ ΚΑΙ ΕΞΟΡΥΞΗ ΓΝΩΣΗΣ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΠΣΥ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Ι. Θεοδωρίδης<br>
Ν. Πελέκης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΠΡΟΣΟΜΟΙΩΣΗ ΣΥΣΤΗΜΑΤΩΝ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΠΣΥ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Ν. Ασημακόπουλος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΕΙΚΟΝΙΚΗ ΠΡΑΓΜΑΤΙΚΟΤΗΤΑ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΤΛΕΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Θ. Παναγιωτόπουλος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΝΑΛΥΣΗ ΕΙΚΟΝΑΣ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΤΛΕΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Γ. Τσιχριντζής<br>
Α. Πικράκης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΣΥΓΧΡΟΝΑ ΘΕΜΑΤΑ </strong></p>
<p align="center">
<strong>ΤΕΧΝΟΛΟΓΙΑΣ ΛΟΓΙΣΜΙΚΟΥ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΤΛΕΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Μ. Βίρβου<br>
Π.Δ. 407/80</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΠΡΑΚΤΙΚΗ ΑΣΚΗΣΗ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Θ. Παναγιωτόπουλος,</p>
<p align="center">
Γ. Τσιχριντζής</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΔΙΑΧΕΙΡΙΣΗ ΓΝΩΣΗΣ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Κ. Μεταξιώτης</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΝΑΚΤΗΣΗ ΠΛΗΡΟΦΟΡΙΑΣ ΚΑΙ ΑΝΑΖΗΤΗΣΗ ΣΤΟΝ ΠΑΓΚΟΣΜΙΟ ΙΣΤΟ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Χ. Κωνσταντόπουλος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΠΛΗΡΟΦΟΡΙΑΚΑ ΣΥΣΤΗΜΑΤΑ </strong></p>
<p align="center">
<strong>ΣΤΗ ΝΑΥΤΙΛΙΑ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:141px;">
<p align="center">
Ι. Θεοδωρίδης<br>
Ε. Τζαννάτος</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΑΓΓΛΙΚΑ VII</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:141px;">
<p align="center">
Χ. Τόμπρου</p>
</td>
</tr>
<tr>
<td style="width:218px;">
<p align="center">
<strong>ΓΑΛΛΙΚΑ VII</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:141px;">
<p align="center">
Α. Βουγιουκλίδου</p>
</td>
</tr>
</tbody>
</table>
<p>
&nbsp;</p>
<table border="1" cellpadding="0" cellspacing="0" class="table_style_green">
<tbody>
<tr>
<td colspan="5" style="width:670px;">
<h3 style="text-align: center;">
Όγδοο Εξάμηνο</h3>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<em>Τίτλος Μαθήματος</em></p>
</td>
<td style="width:82px;">
<p align="center">
<em>Κατηγορία Μαθήματος</em></p>
</td>
<td style="width:145px;">
<p align="center">
<em>Ώρες Διδασκαλίας (εβδ.)</em></p>
</td>
<td style="width:84px;">
<p align="center">
<em>Πιστωτικές Μονάδες</em></p>
</td>
<td style="width:142px;">
<p align="center">
<em>Διδάσκοντες</em></p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΠΤΥΧΙΑΚΗ Β\'</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Υ(Κ)</p>
</td>
<td style="width:145px;">
<p align="center">
&nbsp;</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:142px;">
<p align="center">
&nbsp;</p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΑΣΦΑΛΕΙΑ ΔΙΚΤΥΩΝ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΔΥΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:142px;">
<p align="center">
Π. Κοτζανικολάου</p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΗΛΕΚΤΡΟΝΙΚΟ ΕΠΙΧΕΙΡΕΙΝ ΚΑΙ ΚΑΙΝΟΤΟΜΙΑ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΔΥΣ,ΠΣΥ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:142px;">
<p align="center">
Δ. Πολέμη</p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΠΛΗΡΟΦΟΡΙΑΚΑ ΣΥΣΤΗΜΑΤΑ ΣΤΟ ΔΙΑΔΙΚΤΥΟ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΔΥΣ,ΠΣΥ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:142px;">
<p align="center">
Χ. Δουληγέρης</p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΔΙΟΙΚΗΤΙΚΗ ΠΛΗΡΟΦΟΡΙΚΗ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΠΣΥ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:142px;">
<p align="center">
Κ.Μεταξιώτης</p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΕΚΠΑΙΔΕΥΤΙΚΟ ΛΟΓΙΣΜΙΚΟ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΤΛΕΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:142px;">
<p align="center">
Μ. Βίρβου</p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΕΠΕΞΕΡΓΑΣΙΑ ΣΗΜΑΤΩΝ ΦΩΝΗΣ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΤΛΕΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:142px;">
<p align="center">
Α. Πικράκης</p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΚΑΤΑΝΕΜΗΜΕΝΗ ΤΕΧΝΗΤΗ ΝΟΗΜΟΣΥΝΗ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
ΥΚ (ΤΛΕΣ)</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:142px;">
<p align="center">
Θ. Παναγιωτόπουλος</p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΥΠΟΛΟΓΙΣΤΙΚΗ ΣΤΑΤΙΣΤΙΚΗ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:142px;">
<p align="center">
Φ. Γεωργιακώδης,</p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΠΡΑΚΤΙΚΗ ΑΣΚΗΣΗ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:142px;">
<p align="center">
Γ. Τσιχριντζής</p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΓΕΩΓΡΑΦΙΚΑ ΠΛΗΡΟΦΟΡΙΑΚΑ ΣΥΣΤΗΜΑΤΑ</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:142px;">
<p align="center">
Ι. Θεοδωρίδης<br>
Ν. Πελέκης</p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΣΥΣΤΗΜΑΤΑ ERP/CRM</strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:142px;">
<p align="center">
Κ. Μεταξιώτης</p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΣΥΣΤΗΜΑΤΑ ΔΙΑΣΦΑΛΙΣΗΣ ΠΟΙΟΤΗΤΑΣ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:142px;">
<p align="center">
Ι. Σίσκος</p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΕΙΚΟΝΙΚΕΣ ΕΠΙΧΕΙΡΗΣΕΙΣ </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ε</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
5</p>
</td>
<td style="width:142px;">
<p align="center">
Ν. Ασημακόπουλος</p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΑΓΓΛΙΚΑ VIII </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:142px;">
<p align="center">
X. Tόμπρου</p>
</td>
</tr>
<tr>
<td style="width:217px;">
<p align="center">
<strong>ΓΑΛΛΙΚΑ VIII </strong></p>
</td>
<td style="width:82px;">
<p align="center">
Ξ.Γ.</p>
</td>
<td style="width:145px;">
<p align="center">
4</p>
</td>
<td style="width:84px;">
<p align="center">
--</p>
</td>
<td style="width:142px;">
<p align="center">
Α. Βουγιουκλίδου</p>
</td>
</tr>
</tbody>
</table>',
            'views' => 30,
            'created_at' => '2016-12-20 14:46:51',
            'updated_at' => '2017-04-27 11:37:36',
        ),
        7 => 
        array (
            'id' => 8,
            'alias' => 'postgraduate-general-info',
            'category' => 'studies',
            'viewtitle' => 'Γενικές Πληροφορίες',
            'title' => 'Γενικές Πληροφορίες',
            'content' => '<b>Μεταπτυχιακά: Γενικές Πληροφορίες </b>',
            'views' => 111,
            'created_at' => '2016-12-20 14:52:15',
            'updated_at' => '2017-04-27 14:48:26',
        ),
        8 => 
        array (
            'id' => 9,
            'alias' => 'msc-advanced-information-systems',
            'category' => 'studies',
            'viewtitle' => 'ΠΜΣ Προηγμένα Συστήματα Πληροφορικής',
            'title' => 'ΠΜΣ Προηγμένα Συστήματα Πληροφορικής',
            'content' => '<b>ΠΜΣ Προηγμένα Συστήματα Πληροφορικής </b>',
            'views' => 84,
            'created_at' => '2016-12-23 15:32:13',
            'updated_at' => '2017-04-27 13:57:52',
        ),
        9 => 
        array (
            'id' => 10,
            'alias' => 'msc-informatics',
            'category' => 'studies',
            'viewtitle' => 'ΠΜΣ Πληροφορικής',
            'title' => 'ΠΜΣ Πληροφορικής',
            'content' => '<b>ΠΜΣ Πληροφορικής</b>',
            'views' => 63,
            'created_at' => '2016-12-23 15:32:13',
            'updated_at' => '2017-04-27 13:57:47',
        ),
        10 => 
        array (
            'id' => 11,
            'alias' => 'doctoral-studies',
            'category' => 'studies',
            'viewtitle' => 'Διδακτορικό',
            'title' => 'Διδακτορικό Πρόγραμμα Σπουδών',
            'content' => '<div class="itemFullText">
<p>
Το διδακτορικό πρόγραμμα του Τμήματος έχει στόχο τη διεξαγωγή έρευνας υψηλής ποιότητας και την άρτια εκπαίδευση των νέων ερευνητών, σύμφωνα με τα διεθνή πρότυπα της επιστήμης της Πληροφορικής.</p>
<h2>
Αίτηση και διαδικασία εγγραφής</h2>
<p>
Οι υποψήφιοι υποβάλλουν αίτηση προς τη ΓΣΕΣ στη Γραµµατεία του Τµήµατος. Η Γραµµατεία ελέγχει αν οι υποψήφιοι έχουν τα τυπικά προσόντα συµµετοχής, όπως αυτά προβλέπονται από την ισχύουσα νοµοθεσία και από τον παρόντα Κανονισµό του ΠΜΣ και διαβιβάζει τις αιτήσεις των υποψηφίων, µαζί µε τα δικαιολογητικά που έχουν υποβληθεί στη ΓΣΕΣ, η οποία αποφασίζει αν θα κάνει δεκτούς στο Τµήµα τους υποψήφιους διδάκτορες. Ακολούθως, εάν η αίτηση γίνει δεκτή, η ΓΣΕΣ ορίζει τον επιβλέποντα καθηγητή σύμφωνα µε την αίτηση του υποψηφίου και συγκροτεί την Τριµελή Συµβουλευτική Επιτροπή του υποψήφιου, σύµφωνα µε την πρόταση του επιβλέποντός του.</p>
<p>
Η ΓΣΕΣ έχει τη δυνατότητα να προκηρύξει εκδήλωση ενδιαφέροντος για θέσεις υποψηφίων διδακτόρων σε συγκεκριµένα γνωστικά αντικείµενα. Η σχετική εκδήλωση ενδιαφέροντος δηµοσιεύεται στον ηµερήσιο τύπο, στους πίνακες ανακοινώσεων του Τµήµατος, καθώς και ηλεκτρονικά.</p>
<h2>
Προϋποθέσεις συμμετοχής</h2>
<p>
Για την εκπόνηση διδακτορικής διατριβής οι υποψήφιοι πρέπει να πληρούν τις παρακάτω προϋποθέσεις:</p>
<ol>
<li>
Να είναι πτυχιούχοι Τμημάτων Α.Ε.Ι. (Πανεπιστημίων και Τ.Ε.Ι). της ημεδαπής ή αναγνωρισμένων ομοταγών ιδρυμάτων της αλλοδαπής.</li>
<li>
Να είναι κάτοχοι Μεταπτυχιακού Διπλώματος Ειδίκευσης ή κάτοχοι ισότιµου Μεταπτυχιακού ∆ιπλώµατος Ειδίκευσης Πανεπιστηµιακών Τµηµάτων της ηµεδαπής ή αναγνωρισµένων οµοταγών πανεπιστηµιακών ιδρυµάτων της αλλοδαπής. Για τους κατόχους µεταπτυχιακού τίτλου σπουδών από πανεπιστηµιακό ίδρυµα της αλλοδαπής, είναι απαραίτητη η αναγνώριση του τίτλου αυτού από το ∆ΟΑΤΑΠ.</li>
<li>
Να έχουν επαρκή γνώση της αγγλικής γλώσσας που να πιστοποιείται είτε µε πλήρη κύκλο σπουδών στο εξωτερικό ή τουλάχιστον πιστοποιητικό γλωσσοµάθειας αντίστοιχο του First Certificate.</li>
</ol>
<h2>
Απαιτούμενα δικαιολογητικά</h2>
<ol>
<li>
Αίτηση του ενδιαφερομένου.</li>
<li>
Αναλυτικό βιογραφικό σημείωμα.</li>
<li>
Πρώτο πτυχίο σε οποιαδήποτε ειδικότητα από αναγνωρισμένο εκπαιδευτικό Ίδρυμα.</li>
<li>
Μεταπτυχιακό δίπλωμα τύπου Μάστερ (ΜΒΑ, Μ.Sc.), σε συναφές αντικείμενο, από αναγνωρισμένο εκπαιδευτικό \'Ιδρυμα.</li>
<li>
Αναλυτική βαθμολογία από τις προπτυχιακές και μεταπτυχιακές σπουδές.</li>
<li>
Απόδειξη γλωσσομάθειας της Αγγλικής Γλώσσας.</li>
</ol>	  </div>',
            'views' => 10,
            'created_at' => '2016-12-24 21:36:09',
            'updated_at' => '2017-04-27 11:38:55',
        ),
        11 => 
        array (
            'id' => 12,
            'alias' => 'elearning',
            'category' => 'studies',
            'viewtitle' => 'elearning',
            'title' => 'elearning',
            'content' => '<div class="itemFullText">
<p>Μεταφερθείτε στην επίσημη ιστοσελίδα <b>elearning</b> του τμήματος πληροφορικής πατώντας στον παρακάτω σύνδεσμο: 
</p><p>
<a href="https://elearning.cs.unipi.gr/">elearning.cs.unipi.gr</a></p>	  </div>',
            'views' => 46,
            'created_at' => '2016-12-24 21:44:31',
            'updated_at' => '2017-04-27 11:38:18',
        ),
        12 => 
        array (
            'id' => 13,
            'alias' => 'student-guide',
            'category' => 'studies',
            'viewtitle' => 'Οδηγός Σπουδών',
            'title' => 'Οδηγός Σπουδών',
            'content' => '<div class="itemFullText">
<p>Μεταφερθείτε στον οδηγό σπουδών του τμήματος πληροφορικής πατώντας στον παρακάτω σύνδεσμο: 
</p><p>
<a href="http://www.cs.unipi.gr/files/odigos-pps-2014-2015.pdf">Οδηγός Σπουδών PDF</a></p>	  </div>',
            'views' => 9,
            'created_at' => '2016-12-24 21:44:31',
            'updated_at' => '2017-04-27 11:38:22',
        ),
        13 => 
        array (
            'id' => 14,
            'alias' => 'professors',
            'category' => 'people',
            'viewtitle' => 'Διδάσκοντες',
            'title' => 'Μέλη ΔΕΠ',
            'content' => '',
            'views' => 459,
            'created_at' => '2016-12-27 13:42:48',
            'updated_at' => '2017-04-28 12:41:41',
        ),
        14 => 
        array (
            'id' => 15,
            'alias' => 'doctors-honoris-causa',
            'category' => 'people',
            'viewtitle' => 'Επίτιμοι Διδάκτορες',
            'title' => 'Επίτιμοι Διδάκτορες',
            'content' => '<div class="itemFullText">
<h2>
Ιωσήφ Σηφάκης</h2>
<p>
Στις 29 Απριλίου 2014, το Τμήμα μας είχε την τιμή της αναγόρευσης του Καθηγητή της Πληροφορικής κ. <a href="http://www-verimag.imag.fr/~sifakis/" target="_blank" title="">Ιωσήφ Σηφάκη</a> σε Επίτιμο Διδάκτορά του. Ο κ. Σηφάκης είναι ο μοναδικός Έλληνας και από τους λίγους Ευρωπαίους Επιστήμονες που έχει <a href="http://amturing.acm.org/award_winners/sifakis_1701095.cfm" target="_blank" title="">λάβει το βραβείο Turing</a>, το οποίο θεωρείται αντίστοιχο με το Νόμπελ για την Πληροφορική.</p>
<p>
<img alt="" src="http://192.168.1.4:81/images/pages/jsifakis.jpg" style="width: 236px; height: 303px; float: right; margin-left: 10px; margin-right: 10px;"></p>
<p>
O Ιωσήφ Σηφάκης (γνωστός διεθνώς ως Joseph Sifakis/Ζοζέφ Σιφακίς) είναι Ελληνογάλλος ερευνητής της πληροφορικής, ο οποίος τιμήθηκε με Βραβείο Τούρινγκ το 2007 από κοινού με τον Έντμουντ Κλαρκ και τον Έρνεστ Άλλεν Έμερσον, για τις εργασίες τους στον έλεγχο μοντέλων, μία μέθοδο τυπικής επαλήθευσης υλικού ή λογισμικού υπολογιστών.</p>
<p>
Γεννήθηκε στο Ηράκλειο της Κρήτης το 1946, σπούδασε ηλεκτρολόγος μηχανικός στο Εθνικό Μετσόβιο Πολυτεχνείο και πληροφορική στο Πανεπιστήμιο της Γκρενόμπλ με μία γαλλική υποτροφία, περίοδο στην διάρκεια της οποίας και απέκτησε την γαλλική υπηκοότητα. Ζει στη Γαλλία και εργάζεται για το Εθνικό Κέντρο Επιστημονικών Ερευνών στο εργαστήριο VERIMAG κοντά στη Γκρενόμπλ, του οποίου είναι ιδρυτής.</p>
<p>
Είναι επίσης συνεργάτης του δικτύου Artist2 (European Network of Excellence for research on Embedded Systems). (Πηγή: <a href="http://el.wikipedia.org/wiki/Ζοζέφ_Σιφακίς" target="_blank" title="">Wikipedia</a>)</p>
<p>
<img alt="" src="http://192.168.1.4:81/images/pages/jsifakis_2.jpg" style="width: 200px; height: 300px; float: left; margin-right: 10px;"></p>
<p>
Από την <a href="http://www.facebook.com/maria.virvou/media_set?set=a.418297941640932.100003821886182&amp;type=3" target="_blank">ομιλία της Προέδρου</a> του Τμήματος Πληροφορικής του Πανεπιστημίου Πειραιώς, Καθηγήτριας Μαρίας Βίρβου, σχετικά με την αναγόρευση του Καθηγητή κ. Ιωσήφ Σηφάκη σε Επίτιμο Διδάκτορα του Τμήματος Πληροφορικής:</p>
<p>
"Σήμερα είναι μια πολύ μεγάλη ημέρα για ολόκληρο το Πανεπιστήμιο Πειραιώς αλλά και ειδικότερα για το Τμήμα Πληροφορικής. Η αναγόρευση ενός Επίτιμου Διδάκτορα είναι κορυφαία εκδήλωση ενός Πανεπιστημίου. Ακόμα περισσότερο όταν στην Ακαδημαϊκή κοινότητα του Πανεπιστημίου μας, καλωσορίζουμε έναν επιστήμονα όπως ο Καθηγητής κ. Ιωσήφ Σηφάκης, ο οποίος μας τιμά ιδιαιτέρως με την αποδοχή του τίτλου!</p>
<p>
O κ. Σηφάκης είναι ένας διεθνώς κορυφαίος επιστήμονας που έχει βραβευθεί πολλές φορές για το έργο του. Μεταξύ άλλων, τιμήθηκε από τον Επιστημονικό Οργανισμό για την Πληροφορική, ACM, με το εξέχουσας σημασίας βραβείο TURING, το οποίο θεωρείται αντίστοιχης αξίας με ΝΟΜΠΕΛ, θέτοντας έτσι και τη χώρα του (και χώρα μας), την Ελλάδα στην πολύ μικρή λίστα των μόλις 13 χωρών που διαθέτουν επιστήμονα ή επιστήμονες που έχουν λάβει αυτό το κορυφαίο βραβείο για την Πληροφορική στα 48 χρόνια της λειτουργίας του θεσμού αυτού. Η βράβευσή του αυτή καθώς και τα άλλα σπουδαία επιστημονικά επιτεύγματα του Καθηγητή κ. Σηφάκη έχουν έναν ιδιαίτερο συμβολισμό για μας, στα Ελληνικά Πανεπιστήμια γενικότερα και στην Πληροφορική ειδικότερα γιατί ανανεώνει την πίστη μας στις αξίες της επιστήμης και αποτελεί πρότυπο και πηγή καθοδήγησης για τους νεότερους επιστήμονες και φοιτητές αλλά και για τους νέους Έλληνες."</p>
<h3>
Σχετικοί σύνδεσμοι</h3>
<ul>
<li>
<a href="http://www-verimag.imag.fr/~sifakis/" target="_blank">Προσωπική ιστοσελίδα του Καθηγητή κ. Ιωσήφ Σηφάκη</a></li>
<li>
<a href="http://el.wikipedia.org/wiki/Ζοζέφ_Σιφακίς" target="_blank" title="">Ο Καθηγητής κ. Ιωσήφ Σηφάκης στη Wikipedia</a></li>
<li>
<a href="https://en.wikipedia.org/wiki/Joseph_Sifakis" target="_blank" title="">Professor Joseph Sifakis on Wikipedia</a></li>
<li>
<a href="files/UnivofPiraeusDHC-Greek.pdf" title="">Διαφάνειες της ομιλίας του Καθηγητή κ. Ιωσήφ Σηφάκη</a></li>
<li>
<a href="https://www.facebook.com/maria.virvou/media_set?set=a.418297941640932.100003821886182&amp;type=3" target="_blank">Ολόκληρη η ομιλία της Προέδρου και φωτογραφικό υλικό από την τελετή αναγόρευσης</a></li>
<li>
<a href="http://techpolicy.acm.org/blog/?p=572" target="_blank" title="">Ανακοίνωση σχετικά με τη βράβευση του Καθηγητή κ. Ιωσήφ Σηφάκη με το βραβείο Turing</a></li>
<li>
<a href="http://amturing.acm.org/award_winners/sifakis_1701095.cfm" target="_blank" title="">Η σελίδα του Καθηγητή κ. Ιωσήφ Σηφάκη στον κατάλογο βραβευθέντων με το βραβείο Turing της ACM</a></li>
<li>
<a href="http://bits.blogs.nytimes.com/2014/11/13/google-lifts-the-turing-award-into-nobel-territory/?smid=fb-share&amp;_r=0" target="_blank" title="">Η Google συνεισφέρει στο βραβείο Turing</a></li>
</ul>	  </div>',
            'views' => 18,
            'created_at' => '2016-12-29 14:45:16',
            'updated_at' => '2017-04-27 11:25:25',
        ),
        15 => 
        array (
            'id' => 16,
            'alias' => 'postdoctoral-researchers',
            'category' => 'people',
            'viewtitle' => 'Μεταδιδακτορικοί Ερευνητές',
            'title' => 'Μεταδιδακτορικοί Ερευνητές',
            'content' => '<div class="itemFullText">
<p>
<!-- To enable the display of a list of all users in the postdoc group, uncomment the following --><!--p>
{loadpositionREMOVETHIS metadidaktorikoi-erevnites-1}</p--></p>
<table border="0" cellpadding="0" cellspacing="0" style="width: 407px;" width="336">
<colgroup>
<col>
<col span="2">
</colgroup>
<tbody>
<tr height="31">
<td height="31" style="height: 31px; width: 48px;">
<strong>α/α</strong></td>
<td style="width: 159px;">
<strong>ΕΠΩΝΥΜΟ</strong></td>
<td style="width: 192px;">
<strong>ΟΝΟΜΑ</strong></td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
1</td>
<td style="width: 159px;">
Αναστασάκης</td>
<td style="width: 192px;">
Γεώργιος</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
2</td>
<td style="width: 159px;">
Βαϊδης</td>
<td style="width: 192px;">
Τιμολέων</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
3</td>
<td style="width: 159px;">
Βέργαδος</td>
<td style="width: 192px;">
Δημήτριος</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
4</td>
<td style="width: 159px;">
Βλάχος</td>
<td style="width: 192px;">
Αριστείδης</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
5</td>
<td style="width: 159px;">
Γκιζέλης</td>
<td style="width: 192px;">
Χρήστος-Αντώνιος</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
6</td>
<td style="width: 159px;">
Δέλλιος</td>
<td style="width: 192px;">
Κλεάνθης</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
7</td>
<td style="width: 159px;">
Θεοχαρόπουλος</td>
<td style="width: 192px;">
Ιωάννης</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
8</td>
<td style="width: 159px;">
Καραντζιάς</td>
<td style="width: 192px;">
Αθανάσιος</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
9</td>
<td style="width: 159px;">
Καρβουνίδης</td>
<td style="width: 192px;">
Θεόδωρος</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
10</td>
<td style="width: 159px;">
Κατσιώνης</td>
<td style="width: 192px;">
Γεώργιος</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
11</td>
<td style="width: 159px;">
Μανές</td>
<td style="width: 192px;">
Κωνσταντίνος</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
12</td>
<td style="width: 159px;">
Μυριδάκης</td>
<td style="width: 192px;">
Νικόλαος</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
13</td>
<td style="width: 159px;">
Παπαστεργίου</td>
<td style="width: 192px;">
Σπυρίδων</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
14</td>
<td style="width: 159px;">
Πετραντωνάκης</td>
<td style="width: 192px;">
Παύλος</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
15</td>
<td style="width: 159px;">
Τασούλας</td>
<td style="width: 192px;">
Ιωάννης</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
16</td>
<td style="width: 159px;">
Σγώρα</td>
<td style="width: 192px;">
Αγγελική</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
17</td>
<td style="width: 159px;">
Σωτηρόπουλος</td>
<td style="width: 192px;">
Διονύσιος</td>
</tr>
<tr height="29">
<td height="29" style="height: 29px; width: 48px;">
18</td>
<td style="width: 159px;">
Τσελίκης</td>
<td style="width: 192px;">
Χρήστος</td>
</tr>
</tbody>
</table>
<p>
&nbsp;</p>	  </div>',
            'views' => 15,
            'created_at' => '2016-12-29 15:22:06',
            'updated_at' => '2017-04-27 11:29:33',
        ),
        16 => 
        array (
            'id' => 17,
            'alias' => 'phd-candidates',
            'category' => 'people',
            'viewtitle' => 'Υποψήφιοι Διδάκτορες',
            'title' => 'Υποψήφιοι Διδάκτορες',
            'content' => '<div class="itemFullText">
<p>
<!-- To enable the display of a list of all users in the postdoc group, uncomment the following --><!--p>
{loadpositionREMOVETHIS metadidaktorikoi-erevnites-1}</p--></p>
<table border="0" cellpadding="0" cellspacing="0" style="width: 407px;" width="336">
<colgroup>
<col>
<col span="2">
</colgroup>
<tbody>
<tr height="31">
<td height="31" style="height: 31px; width: 48px;">
<strong>α/α</strong></td>
<td style="width: 159px;">
<strong>ΕΠΩΝΥΜΟ</strong></td>
<td style="width: 192px;">
<strong>ΟΝΟΜΑ</strong></td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
1</td>
<td>
Abdo Alnasir</td>
<td style="width: 304px;">
Almabrok</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
2</td>
<td>
Nικόλαος</td>
<td style="width: 304px;">
Αβραντινής</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
3</td>
<td>
Νικόλαος</td>
<td style="width: 304px;">
Αλμαλής</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
4</td>
<td>
Ράλλης</td>
<td style="width: 304px;">
Αντωνιάδης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
5</td>
<td>
Ιωάννης</td>
<td style="width: 304px;">
Αποστολάτος</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
6</td>
<td>
Αλέξανδρος</td>
<td style="width: 304px;">
Βαβούσης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
7</td>
<td>
Δημήτριος</td>
<td style="width: 304px;">
Βάρσος</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
8</td>
<td>
Αφροδίτη</td>
<td style="width: 304px;">
Βενέτη</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
9</td>
<td>
Γεώργιος</td>
<td style="width: 304px;">
Βλαχάκης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
10</td>
<td>
Μάριος</td>
<td style="width: 304px;">
Βόντας</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
11</td>
<td>
Ζαχαρένια</td>
<td style="width: 304px;">
Γαροφαλάκη</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
12</td>
<td>
Θεοφάνης</td>
<td style="width: 304px;">
Γιώτης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
13</td>
<td>
Αντώνιος</td>
<td style="width: 304px;">
Γκοτσίνας</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
14</td>
<td>
Παναγιώτης</td>
<td style="width: 304px;">
Γκοτσιόπουλος</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
15</td>
<td>
Φραγκίσκος</td>
<td style="width: 304px;">
Γρυλλάκης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
16</td>
<td>
Ευάγγελος</td>
<td style="width: 304px;">
Δεϊρμεντζόγλου</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
17</td>
<td>
Σάββας</td>
<td style="width: 304px;">
Δρακούλης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
18</td>
<td>
Παναγιώτης</td>
<td style="width: 304px;">
Δρακουλόγκωνας</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
19</td>
<td>
Δημήτριος</td>
<td style="width: 304px;">
Ευσταθίου</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
20</td>
<td>
Αθανάσιος</td>
<td style="width: 304px;">
Ζαρογιάννης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
21</td>
<td>
Ευάγγελος</td>
<td style="width: 304px;">
Ζαχαράκης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
22</td>
<td>
Μαρία</td>
<td style="width: 304px;">
Ζογκού</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
23</td>
<td>
Αθανάσιος</td>
<td style="width: 304px;">
Ζυγομήτρος</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
24</td>
<td>
Σταμάτιος</td>
<td style="width: 304px;">
Θεοχάρης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
25</td>
<td>
Δημήτριος</td>
<td style="width: 304px;">
Καλλέργης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
26</td>
<td>
Ιωάννης</td>
<td style="width: 304px;">
Καλλιγκάτσης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
27</td>
<td>
Ελένη-Μαρία</td>
<td style="width: 304px;">
Καλογεράκη</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
28</td>
<td>
Απόστολος</td>
<td style="width: 304px;">
Καραλής</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
29</td>
<td>
Γεώργιος</td>
<td style="width: 304px;">
Κατσικογιάννης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
30</td>
<td>
Ιωάννης</td>
<td style="width: 304px;">
Κοντούλης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
31</td>
<td>
Δέσποινα</td>
<td style="width: 304px;">
Κοπανάκη</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
32</td>
<td>
Δημήτριος</td>
<td style="width: 304px;">
Κοτσιφάκος</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
33</td>
<td>
Δημήτριος</td>
<td style="width: 304px;">
Κουτάνης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
34</td>
<td>
Διονύσιος</td>
<td style="width: 304px;">
Κουτσαντώνης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
35</td>
<td>
Ακριβή</td>
<td style="width: 304px;">
Κρούσκα</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
36</td>
<td>
Σίμος</td>
<td style="width: 304px;">
Κυριακίδης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
37</td>
<td>
Γεράσιμος</td>
<td style="width: 304px;">
Λιναρδάτος</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
38</td>
<td>
Δημήτριος</td>
<td style="width: 304px;">
Μαθιουδάκης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
39</td>
<td>
Γεώργιος</td>
<td style="width: 304px;">
Μακροδημήτρης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
40</td>
<td>
Ιωάννης</td>
<td style="width: 304px;">
Μάμαλης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
41</td>
<td>
Βασιλική</td>
<td style="width: 304px;">
Ματζαβέλα</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
42</td>
<td>
Ιωάννα</td>
<td style="width: 304px;">
Μηλιαρέση</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
43</td>
<td>
Κωνσταντίνος</td>
<td style="width: 304px;">
Μηλιώρης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
44</td>
<td>
Αλέξανδρος</td>
<td style="width: 304px;">
Μίαρης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
45</td>
<td>
Αγγελική</td>
<td style="width: 304px;">
Μικέλη</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
46</td>
<td>
Σπυρίδων</td>
<td style="width: 304px;">
Νικολάου</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
47</td>
<td>
Χρήστος</td>
<td style="width: 304px;">
Ντριγκόγιας</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
48</td>
<td>
Αχιλλέας</td>
<td style="width: 304px;">
Παπαγεωργίου</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
49</td>
<td>
Σπυρίδων</td>
<td style="width: 304px;">
Παπαδημητρίου</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
50</td>
<td>
Αναστάσιος</td>
<td style="width: 304px;">
Παπαθανασίου</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
51</td>
<td>
Παναγιώτης</td>
<td style="width: 304px;">
Παπαϊωάννου</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
52</td>
<td>
Δημήτριος</td>
<td style="width: 304px;">
Παπανίκας</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
53</td>
<td>
Δημήτριος</td>
<td style="width: 304px;">
Παππάς</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
54</td>
<td>
Νικόλαος</td>
<td style="width: 304px;">
Πετράκος</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
55</td>
<td>
Χρυσάνθη</td>
<td style="width: 304px;">
Πέτρου</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
56</td>
<td>
Θεοδώρα</td>
<td style="width: 304px;">
Πλιώτα</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
57</td>
<td>
Κυριάκος</td>
<td style="width: 304px;">
Πούτος</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
58</td>
<td>
Κωνσταντίνος</td>
<td style="width: 304px;">
Ρήγος</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
59</td>
<td>
Πέτρος</td>
<td style="width: 304px;">
Σαλίχος</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
60</td>
<td>
Αΐτζάν</td>
<td style="width: 304px;">
Σαρή</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
61</td>
<td>
Ελένη</td>
<td style="width: 304px;">
Σεραλίδου</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
62</td>
<td>
Σωτήριος-Χρήστος</td>
<td style="width: 304px;">
Σιδηρόπουλος</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
63</td>
<td>
Εμμανουήλ</td>
<td style="width: 304px;">
Σκόνδρας</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
64</td>
<td>
Βασιλική</td>
<td style="width: 304px;">
Σπηλιώτη</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
65</td>
<td>
Ιωάννης</td>
<td style="width: 304px;">
Στέλλιος</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
66</td>
<td>
Εμμανουήλ</td>
<td style="width: 304px;">
Σφακιανάκης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
67</td>
<td>
Ανδρέας</td>
<td style="width: 304px;">
Σωτηρόπουλος</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
68</td>
<td>
Δημήτριος-Γεώργιος</td>
<td style="width: 304px;">
Σωτήρος</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
69</td>
<td>
Παναγιώτης</td>
<td style="width: 304px;">
Ταμπάκης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
70</td>
<td>
Νικόλαος</td>
<td style="width: 304px;">
Ταντούρης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
71</td>
<td>
Δήμητρα</td>
<td style="width: 304px;">
Τζούμπα</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
72</td>
<td>
Ιωάννης</td>
<td style="width: 304px;">
Τρίχας</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
73</td>
<td>
Χρήστος</td>
<td style="width: 304px;">
Τρούσσας</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
74</td>
<td>
Νικόλαος</td>
<td style="width: 304px;">
Τσώλης</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
75</td>
<td>
Ιωάννης</td>
<td style="width: 304px;">
Φούντας</td>
</tr>
<tr height="21">
<td height="21" style="height:21px;">
76</td>
<td>
Δέσποινα</td>
<td style="width: 304px;">
Φραγκιαδάκη</td>
</tr>
</tbody>
</table>
<p>
&nbsp;</p>	  </div>',
            'views' => 23,
            'created_at' => '2016-12-29 15:50:51',
            'updated_at' => '2017-04-28 12:22:31',
        ),
        17 => 
        array (
            'id' => 18,
            'alias' => 'secretariat',
            'category' => 'people',
            'viewtitle' => 'Γραμματεία',
            'title' => 'Γραμματεία',
            'content' => '<p>
Το κτίριο της Γραμματείας του Τμήματος βρίσκεται στον Πειραιά επί της οδού Ζέας 80-82 (1<sup>ος</sup> όροφος).&nbsp; Η Γραμματεία του Τμήματος εξυπηρετεί τους προπτυχιακούς φοιτητές κάθε Δευτέρα-Τετάρτη-Παρασκευή, 11:30-14:00.</p>
<p>
Fax.: 210-4142107</p>

<p>Ομαδική διεύθυνση ηλεκτρονικού ταχυδρομείου Γραμματείας: 
<a href="mailto:plh-secr@unipi.gr">plh-secr@unipi.gr</a></p>',
            'views' => 39,
            'created_at' => '2016-12-29 15:58:46',
            'updated_at' => '2017-03-13 13:03:39',
        ),
        18 => 
        array (
            'id' => 19,
            'alias' => 'research-areas',
            'category' => 'research',
            'viewtitle' => 'Τομείς Έρευνας',
            'title' => 'Τομείς Έρευνας',
            'content' => '<div class="itemFullText">
<p style="text-align: justify;">
Τα ερευνητικά ενδιαφέροντα των ακαδημαϊκών μελών του Τμήματος καλύπτουν τους κυριότερους τομείς της Επιστήμης της Πληροφορικής. Οι τομείς αυτοί προσδιορίζονται από τις ακόλουθες περιοχές ερευνητικής δραστηριότητας:</p>
<ul>
<li style="text-align: justify;">
Θεωρία Αλγορίθμων και Υπολογισμού</li>
<li style="text-align: justify;">
Συνδυαστική ανάλυση</li>
<li style="text-align: justify;">
Τεχνολογία Λογισμικού</li>
<li style="text-align: justify;">
Ευφυή Εικονικά Περιβάλλοντα</li>
<li style="text-align: justify;">
Κρυπτογραφία</li>
<li style="text-align: justify;">
Θεωρία Γραφημάτων</li>
<li style="text-align: justify;">
Υπολογιστική Γεωμετρία</li>
<li style="text-align: justify;">
Υπολογιστική Λογική</li>
<li style="text-align: justify;">
Γλώσσες Προγραμματισμού</li>
<li style="text-align: justify;">
Παράλληλοι και Κατανεμημένοι Αλγόριθμοι</li>
<li style="text-align: justify;">
Δίκτυα Υπολογιστών</li>
<li style="text-align: justify;">
Συστήματα Βάσεων Δεδομένων</li>
<li style="text-align: justify;">
Κινητά Υπολογιστικά Συστήματα</li>
<li style="text-align: justify;">
Ασφάλεια Πληροφοριακών Συστημάτων</li>
<li style="text-align: justify;">
Τεχνητή Νοημοσύνη</li>
<li style="text-align: justify;">
Νευρωνικά Δίκτυα</li>
<li style="text-align: justify;">
Αναγνώριση Προτύπων</li>
<li style="text-align: justify;">
Επιστημονικοί Υπολογισμοί</li>
<li style="text-align: justify;">
Γραφικά</li>
<li style="text-align: justify;">
Επεξεργασία Σήματος</li>
<li style="text-align: justify;">
Επεξεργασία Εικόνας</li>
<li style="text-align: justify;">
Βελτιστοποίηση</li>
<li style="text-align: justify;">
Σχεδίαση και Ελεγχος Ολοκληρωμένων Κυκλωμάτων</li>
<li style="text-align: justify;">
Αρχιτεκτονική Υπολογιστών</li>
</ul>
<p>
&nbsp;</p>	  </div>',
            'views' => 17,
            'created_at' => '2016-12-30 14:30:39',
            'updated_at' => '2017-04-27 11:29:37',
        ),
        19 => 
        array (
            'id' => 20,
            'alias' => 'selected-publications',
            'category' => 'research',
            'viewtitle' => 'Επιλεγμένες Δημοσιεύσεις',
            'title' => 'Επιλεγμένες Δημοσιεύσεις',
            'content' => '',
            'views' => 26,
            'created_at' => '2016-12-30 14:30:39',
            'updated_at' => '2017-04-27 11:38:46',
        ),
        20 => 
        array (
            'id' => 21,
            'alias' => 'research-projects',
            'category' => 'research',
            'viewtitle' => 'Ερευνητικά Έργα',
            'title' => 'Ερευνητικά Έργα',
            'content' => '<p>
Το Τμήμα Πληροφορικής έχει συμμετάσχει στα παρακάτω ερευνητικά έργα:</p>',
            'views' => 73,
            'created_at' => '2016-12-30 14:54:27',
            'updated_at' => '2017-04-27 11:24:40',
        ),
        21 => 
        array (
            'id' => 22,
            'alias' => 'research-labs',
            'category' => 'research',
            'viewtitle' => 'Ερευνητικά Εργαστήρια',
            'title' => 'Ερευνητικά Εργαστήρια',
            'content' => '<p>
Στο Τμήμα Πληροφορικής λειτουργούν τα παρακάτω θεσμοθετημένα ερευνητικά εργαστήρια:</p>',
            'views' => 68,
            'created_at' => '2016-12-30 14:54:27',
            'updated_at' => '2017-04-27 15:16:19',
        ),
        22 => 
        array (
            'id' => 23,
            'alias' => 'scientific-conferences',
            'category' => 'events',
            'viewtitle' => 'Επιστημονικά Συνέδρεια',
            'title' => 'Επιστημονικά Συνέδρεια',
            'content' => '<p>Το Τμήμα Πληροφορικής έχει συμμετάσχει στη διοργάνωση των παρακάτω επιστημονικών συνεδρίων:</p>',
            'views' => 39,
            'created_at' => '2016-12-31 15:07:48',
            'updated_at' => '2017-04-27 11:39:02',
        ),
        23 => 
        array (
            'id' => 24,
            'alias' => 'talks',
            'category' => 'events',
            'viewtitle' => 'Ομιλίες, Διαλέξεις',
            'title' => 'Ομιλίες, Διαλέξεις',
            'content' => '<p> Στο Τμήμα Πληροφορικής έχουν πραγματοποιηθεί οι παρακάτω ομιλίες και διαλέξεις: </p>',
            'views' => 21,
            'created_at' => '2016-12-31 15:07:48',
            'updated_at' => '2017-04-27 11:38:07',
        ),
        24 => 
        array (
            'id' => 25,
            'alias' => 'other-events',
            'category' => 'events',
            'viewtitle' => 'Άλλες Εκδηλώσεις',
            'title' => 'Άλλες Εκδηλώσεις',
            'content' => '<p>Το Τμήμα Πληροφορικής έχει συμμετάσχει στη διοργάνωση των παρακάτω εκδηλώσεων:</p>',
            'views' => 17,
            'created_at' => '2016-12-31 15:07:48',
            'updated_at' => '2017-04-27 11:38:10',
        ),
        25 => 
        array (
            'id' => 26,
            'alias' => 'department-university-services',
            'category' => 'services',
            'viewtitle' => 'Υπηρεσίες Τμήματος και Πανεπιστημίου',
            'title' => 'Υπηρεσίες Τμήματος και Πανεπιστημίου',
            'content' => '',
            'views' => 114,
            'created_at' => '2017-01-04 17:17:48',
            'updated_at' => '2017-04-27 11:29:55',
        ),
        26 => 
        array (
            'id' => 27,
            'alias' => 'coorporate-companies',
            'category' => 'services',
            'viewtitle' => 'Συνεργαζόμενες Εταιρίες',
            'title' => 'Συνεργαζόμενες Εταιρίες',
            'content' => '',
            'views' => 17,
            'created_at' => '2017-01-04 17:17:48',
            'updated_at' => '2017-04-27 11:38:34',
        ),
        27 => 
        array (
            'id' => 29,
            'alias' => 'contact',
            'category' => 'contact',
            'viewtitle' => 'Επικοινωνία',
            'title' => 'Επικοινωνία',
            'content' => '<p>
<strong><u>Γραμματεία Φοιτητών</u><br>
Διεύθυνση:</strong> 1<sup>ος</sup> όροφος, Ζέας 80-82, Πειραιάς 18534<br>
<strong>Τηλέφωνο:</strong><a class="info-link" href="tel: 210 4142067">210 4142067</a> , <a class="info-link" href="tel: 210 4142437">210 4142437</a> <br>	
<strong>E-mail:</strong><a class="info-link" href="mailto:plh-secr@unipi.gr">plh-secr@unipi</a>
</p>

<p>
<strong><u>Γραμματεία Προέδρου</u><br>
Διεύθυνση:</strong> Γραφείο 503, Κεντρ. κτίριο, Καραολή &amp; Δημητρίου 80, Πειραιάς 18534<br>
<strong>Τηλέφωνο:</strong><a class="info-link" href="tel:210 4142263">210 4142263</a><br>
<strong>E-mail:</strong><a class="info-link" href="mailto:infodept@unipi.gr">infodept@unipi.gr</a>
</p>

<p>
<strong><u>Γραμματεία ΠΜΣ Πληροφορικής</u><br>
Διεύθυνση:</strong> Γραφείο 503, Κεντρ. κτίριο, Καραολή &amp; Δημητρίου 80, Πειραιάς 18534<br>
<strong>Τηλέφωνο:</strong><a class="info-link" href="tel:210 4142263">210 4142263</a> , <a class="info-link" href="tel:210 4142105">210 4142105</a><br>	
<strong>E-mail:</strong><a class="info-link" href="mailto:infodept@unipi.gr">infodept@unipi.gr</a>
</p>

<p>
<strong><u>Γραμματεία ΠΜΣ Προηγμένα Συστήματα Πληροφορικής</u><br>
Διεύθυνση:</strong> Γραφείο 503, Κεντρ. κτίριο, Καραολή &amp; Δημητρίου 80, Πειραιάς 18534<br>
<strong>Τηλέφωνο:</strong><a class="info-link" href="tel:210 4142105">210 4142105</a> , <strong>Τηλέφωνο:</strong><a class="info-link" href="tel:210 4142263">210 4142263</a><br>
<strong>E-mail:</strong><a class="info-link" href="mailto:psp@unipi.gr">psp@unipi.gr</a>
</p>

<p>
<strong><u>Γραμματεία e-Learning</u><br>
Διεύθυνση:</strong> Γραφείο 503, Κεντρ. κτίριο, Καραολή &amp; Δημητρίου 80, Πειραιάς 18534<br>
<strong>Τηλέφωνο:</strong><a class="info-link" href="tel:210 4142263">210 4142263</a><br>
<strong>E-mail:</strong><a class="info-link" href="mailto:elearncs@unipi.gr">elearncs@unipi.gr</a>
</p>

',
            'views' => 53,
            'created_at' => '2017-01-04 18:39:33',
            'updated_at' => '2017-04-27 15:14:40',
        ),
        28 => 
        array (
            'id' => 31,
            'alias' => 'csunipi',
            'category' => 'about',
            'viewtitle' => 'Σχετικά με το CS Unipi',
            'title' => 'Σχετικά με το CS Unipi',
            'content' => '<div class="itemBody">


<!-- Item text -->
<div class="itemFullText">
<p>Tο Τμήμα Πληροφορικής δέχεται φοιτητές/τριες από την πρακτική και την τεχνολογική κατεύθυνση και έχει ως αντικείμενο τόσο τη θεωρητική όσο και την εφηρμοσμένη Πληροφορική. Έτσι το πρόγραμμα σπουδών του καλύπτει, σύμφωνα με τις μεταβαλλόμενες ακαδημαϊκές και παραγωγικές ανάγκες, τις νέες κατευθύνσεις και εξελίξεις της Πληροφορικής. Οι σπουδές διαρκούν οκτώ εξάμηνα και οι φοιτητές/τριες έχουν τη δυνατότητα από το τρίτο εξάμηνο να παρακολουθούν και κατ΄ επιλογήν μαθήματα. Από το πέμπτο εξάμηνο, οι φοιτητές επιλέγουν μία από τις τρεις κατευθύνσεις σπουδών: Τεχνολογία Λογισμικού και Ευφυή Συστήματα, Διαδικτυακά και Υπολογιστικά Συστήματα και Πληροφοριακά Συστήματα.</p>
<p>Παράλληλα με τη θεωρητική υποδομή του προγράμματος, δίδεται ιδιαίτερη έμφαση και στην πρακτική εξάσκηση των φοιτητών/τριών στα Εργαστήρια Πληροφορικής του Τμήματος, ενώ όλοι οι φοιτητές έχουν πρόσβαση στο Internet. Eπίσης με την συμμετοχή τους στην πρακτική άσκηση οι φοιτητές επεκτείνουν τις γνώσεις τους και αποκτούν πολύτιμη εμπειρία σε Επιχειρήσεις/Οργανισμούς. Μέσω της κεντρικής Βιβλιοθήκης του Πανεπιστημίου, οι φοιτητές/τριες του Τμήματος μπορούν να συμβουλεύονται ηλεκτρονικές βιβλιοθήκες μέσα από το Διαδίκτυο.</p>
<p>Το Τμήμα επίσης συμμετέχει στο διαπανεπιστημιακό-διατμηματικό μεταπτυχιακό πρόγραμμα σπουδών με τίτλο «Οργάνωση και Διοίκηση Υπηρεσιών Υγείας-Πληροφορική Υγείας», ενώ παρέχεται επίσης και πρόγραμμα μεταπτυχιακών σπουδών του Τμήματος.</p>',
            'views' => 24,
            'created_at' => '2017-01-12 15:25:32',
            'updated_at' => '2017-04-29 15:44:24',
        ),
        29 => 
        array (
            'id' => 32,
            'alias' => 'this-app',
            'category' => 'about',
            'viewtitle' => 'Σχετικά με αυτή την εφαρμογή',
            'title' => 'Σχετικά με αυτή την εφαρμογή',
            'content' => '<div class="itemBody">
<div class="itemFullText">
<p>Η εφαρμογή CS Unipi Mobile αποτελεί μέρος μιας ευρύτερης πρωτοβουλίας για τη βελτίωση της εμπειρίας για φοιτητές, καθηγητές, προσωπικού, επισκέπτες και ενδιαφερόμενους οι οποίοι που αλληλεπιδρούν με το Τμήμα Πληροφορικής του Πανεπιστημίου Πειραιώς και την κοινότητά του.</p>

<p>Παρακαλούμε επικοινωνήστε μαζί μας με e-mail για ερωτήσεις, προτάσεις και αναφορές σφαλμάτων στο ?@?.? .</p>

<p>Η παρούσα εφαρμογή CS Unipi, υλοποιήθηκε στα πλαίσια πτυχιακής εργασίας του Τμήματος Πληροφορικής του Πανεπιστημίου Πειραιώς, από τον φοιτητή Αλέξανδρο Κάππο υπο την επιβλεψη &nbsp;των ?@?.?.</p>
</div>
</div>
',
            'views' => 33,
            'created_at' => '2017-01-12 15:25:32',
            'updated_at' => '2017-04-29 15:54:26',
        ),
    ));
        
        
    }
}
