<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('el', array (
  'validators' => 
  array (
    'This value should be false.' => 'Αυτή η τιμή πρέπει να είναι ψευδής.',
    'This value should be true.' => 'Αυτή η τιμή πρέπει να είναι αληθής.',
    'This value should be of type {{ type }}.' => 'Αυτή η τιμή πρέπει να είναι τύπου {{ type }}.',
    'This value should be blank.' => 'Αυτή η τιμή πρέπει να είναι κενή.',
    'The value you selected is not a valid choice.' => 'Η τιμή που επιλέχθηκε δεν αντιστοιχεί σε έγκυρη επιλογή.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Πρέπει να επιλέξετε τουλάχιστον {{ limit }} επιλογή.|Πρέπει να επιλέξετε τουλάχιστον {{ limit }} επιλογές.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Πρέπει να επιλέξετε το πολύ {{ limit }} επιλογή.|Πρέπει να επιλέξετε το πολύ {{ limit }} επιλογές.',
    'One or more of the given values is invalid.' => 'Μια ή περισσότερες τιμές δεν είναι έγκυρες.',
    'This field was not expected.' => 'Αυτό το πεδίο δεν ήταν αναμενόμενο.',
    'This field is missing.' => 'Λείπει αυτό το πεδίο.',
    'This value is not a valid date.' => 'Η τιμή δεν αντιστοιχεί σε έγκυρη ημερομηνία.',
    'This value is not a valid datetime.' => 'Η τιμή δεν αντιστοιχεί σε έγκυρη ημερομηνία και ώρα.',
    'This value is not a valid email address.' => 'Η τιμή δεν αντιστοιχεί σε έγκυρο email.',
    'The file could not be found.' => 'Το αρχείο δε μπορεί να βρεθεί.',
    'The file is not readable.' => 'Το αρχείο δεν είναι αναγνώσιμο.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Το αρχείο είναι πολύ μεγάλο ({{ size }} {{ suffix }}). Το μέγιστο επιτρεπτό μέγεθος είναι {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Ο τύπος mime του αρχείου δεν είναι έγκυρος ({{ type }}). Οι έγκρυοι τύποι mime είναι {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Αυτή η τιμή θα έπρεπε να είναι {{ limit }} ή λιγότερο.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Αυτή η τιμή είναι πολύ μεγάλη. Θα έπρεπε να έχει {{ limit }} χαρακτήρα ή λιγότερο.|Αυτή η τιμή είναι πολύ μεγάλη. Θα έπρεπε να έχει {{ limit }} χαρακτήρες ή λιγότερο.',
    'This value should be {{ limit }} or more.' => 'Αυτή η τιμή θα έπρεπε να είναι {{ limit }} ή περισσότερο.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Αυτή η τιμή είναι πολύ μικρή. Θα έπρεπε να έχει {{ limit }} χαρακτήρα ή περισσότερο.|Αυτή η τιμή είναι πολύ μικρή. Θα έπρεπε να έχει {{ limit }} χαρακτήρες ή περισσότερο.',
    'This value should not be blank.' => 'Αυτή η τιμή δεν πρέπει να είναι κενή.',
    'This value should not be null.' => 'Αυτή η τιμή δεν πρέπει να είναι μηδενική.',
    'This value should be null.' => 'Αυτή η τιμή πρέπει να είναι μηδενική.',
    'This value is not valid.' => 'Αυτή η τιμή δεν είναι έγκυρη.',
    'This value is not a valid time.' => 'Αυτή η τιμή δεν αντιστοιχεί σε έγκυρη ώρα.',
    'This value is not a valid URL.' => 'Αυτή η τιμή δεν αντιστοιχεί σε έγκυρο URL.',
    'The two values should be equal.' => 'Οι δύο τιμές θα πρέπει να είναι ίδιες.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Το αρχείο είναι πολύ μεγάλο. Το μέγιστο επιτρεπτό μέγεθος είναι {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Το αρχείο είναι πολύ μεγάλο.',
    'The file could not be uploaded.' => 'Το αρχείο δε μπορεί να ανέβει.',
    'This value should be a valid number.' => 'Αυτή η τιμή θα πρέπει να είναι ένας έγκυρος αριθμός.',
    'This file is not a valid image.' => 'Το αρχείο δεν αποτελεί έγκυρη εικόνα.',
    'This is not a valid IP address.' => 'Αυτό δεν είναι μια έγκυρη διεύθυνση IP.',
    'This value is not a valid language.' => 'Αυτή η τιμή δεν αντιστοιχεί σε μια έγκυρη γλώσσα.',
    'This value is not a valid locale.' => 'Αυτή η τιμή δεν αντιστοιχεί σε έκγυρο κωδικό τοποθεσίας.',
    'This value is not a valid country.' => 'Αυτή η τιμή δεν αντιστοιχεί σε μια έγκυρη χώρα.',
    'This value is already used.' => 'Αυτή η τιμή χρησιμοποιείται ήδη.',
    'The size of the image could not be detected.' => 'Το μέγεθος της εικόνας δεν ήταν δυνατό να ανιχνευθεί.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Το πλάτος της εικόνας είναι πολύ μεγάλο ({{ width }}px). Το μέγιστο επιτρεπτό πλάτος είναι {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Το πλάτος της εικόνας είναι πολύ μικρό ({{ width }}px). Το ελάχιστο επιτρεπτό πλάτος είναι {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Το ύψος της εικόνας είναι πολύ μεγάλο ({{ height }}px). Το μέγιστο επιτρεπτό ύψος είναι {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Το ύψος της εικόνας είναι πολύ μικρό ({{ height }}px). Το ελάχιστο επιτρεπτό ύψος είναι {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Αυτή η τιμή θα έπρεπε να είναι ο τρέχων κωδικός.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Αυτή η τιμή θα έπρεπε να έχει ακριβώς {{ limit }} χαρακτήρα.|Αυτή η τιμή θα έπρεπε να έχει ακριβώς {{ limit }} χαρακτήρες.',
    'The file was only partially uploaded.' => 'Το αρχείο δεν ανέβηκε ολόκληρο.',
    'No file was uploaded.' => 'Δεν ανέβηκε κανένα αρχείο.',
    'No temporary folder was configured in php.ini.' => 'Κανένας προσωρινός φάκελος δεν έχει ρυθμιστεί στο php.ini.',
    'Cannot write temporary file to disk.' => 'Αδυναμία εγγραφής προσωρινού αρχείου στο δίσκο.',
    'A PHP extension caused the upload to fail.' => 'Μια επέκταση PHP προκάλεσε αδυναμία ανεβάσματος.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχείο ή περισσότερα.|Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχεία ή περισσότερα.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχείo ή λιγότερα.|Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχεία ή λιγότερα.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Αυτή η συλλογή θα πρέπει να περιέχει ακριβώς {{ limit }} στοιχείo.|Αυτή η συλλογή θα πρέπει να περιέχει ακριβώς {{ limit }} στοιχεία.',
    'Invalid card number.' => 'Μη έγκυρος αριθμός κάρτας.',
    'Unsupported card type or invalid card number.' => 'Μη υποστηριζόμενος τύπος κάρτας ή μη έγκυρος αριθμός κάρτας.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Αυτό δεν αντιστοιχεί σε έκγυρο διεθνή αριθμό τραπεζικού λογαριασμού (IBAN).',
    'This value is not a valid ISBN-10.' => 'Αυτό δεν είναι έγκυρος κωδικός ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Αυτό δεν είναι έγκυρος κωδικός ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Αυτό δεν είναι ούτε έγκυρος κωδικός ISBN-10 ούτε έγκυρος κωδικός ISBN-13.',
    'This value is not a valid ISSN.' => 'Αυτό δεν είναι έγκυρος κωδικός ISSN.',
    'This value is not a valid currency.' => 'Αυτό δεν αντιστοιχεί σε έγκυρο νόμισμα.',
    'This value should be equal to {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι ίση με {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μεγαλύτερη από {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μεγαλύτερη ή ίση με {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι πανομοιότυπη με {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μικρότερη από {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μικρότερη ή ίση με {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Αυτή η τιμή δεν θα πρέπει να είναι ίση με {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Αυτή η τιμή δεν πρέπει να είναι πανομοιότυπη με {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Η αναλογία πλάτους-ύψους της εικόνας είναι πολύ μεγάλη ({{ ratio }}). Μέγιστη επιτρεπτή αναλογία {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Η αναλογία πλάτους-ύψους της εικόνας είναι πολύ μικρή ({{ ratio }}). Ελάχιστη επιτρεπτή αναλογία {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Η εικόνα είναι τετράγωνη ({{ width }}x{{ height }}px). Δεν επιτρέπονται τετράγωνες εικόνες.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Η εικόνα έχει οριζόντιο προσανατολισμό ({{ width }}x{{ height }}px). Δεν επιτρέπονται εικόνες με οριζόντιο προσανατολισμό.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Η εικόνα έχει κάθετο προσανατολισμό ({{ width }}x{{ height }}px). Δεν επιτρέπονται εικόνες με κάθετο προσανατολισμό.',
    'An empty file is not allowed.' => 'Δεν επιτρέπεται κενό αρχείο.',
    'The host could not be resolved.' => 'Η διεύθυνση δεν μπόρεσε να επιλυθεί.',
    'This value does not match the expected {{ charset }} charset.' => 'Αυτή η τιμή δεν ταιριάζει στο αναμενόμενο {{ charset }} σύνολο χαρακτήρων.',
    'This is not a valid Business Identifier Code (BIC).' => 'Αυτός δεν έιναι ένας έγκυρος κωδικός BIC.',
    'Error' => 'Σφάλμα',
    'This is not a valid UUID.' => 'Αυτό δεν είναι ένα έγκυρο UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Αυτή η τιμή θα έπρεπε να είναι πολλαπλάσιο του {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Αυτός ο κωδικός BIC δεν σχετίζεται με το IBAN {{ iban }}.',
    'This form should not contain extra fields.' => 'Αυτή η φόρμα δεν πρέπει να περιέχει επιπλέον πεδία.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Το αρχείο είναι πολύ μεγάλο. Παρακαλούμε προσπαθήστε να ανεβάσετε ένα μικρότερο αρχείο.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Το CSRF token δεν είναι έγκυρο. Παρακαλούμε δοκιμάστε να υποβάλετε τη φόρμα ξανά.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Συνέβη ένα σφάλμα πιστοποίησης.',
    'Authentication credentials could not be found.' => 'Τα στοιχεία πιστοποίησης δε βρέθηκαν.',
    'Authentication request could not be processed due to a system problem.' => 'Το αίτημα πιστοποίησης δε μπορεί να επεξεργαστεί λόγω σφάλματος του συστήματος.',
    'Invalid credentials.' => 'Λανθασμένα στοιχεία σύνδεσης.',
    'Cookie has already been used by someone else.' => 'Το Cookie έχει ήδη χρησιμοποιηθεί από κάποιον άλλο.',
    'Not privileged to request the resource.' => 'Δεν είστε εξουσιοδοτημένος για πρόσβαση στο συγκεκριμένο περιεχόμενο.',
    'Invalid CSRF token.' => 'Μη έγκυρο CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Δε βρέθηκε κάποιος πάροχος πιστοποίησης που να υποστηρίζει το token πιστοποίησης.',
    'No session available, it either timed out or cookies are not enabled.' => 'Δεν υπάρχει ενεργή σύνοδος (session), είτε έχει λήξει ή τα cookies δεν είναι ενεργοποιημένα.',
    'No token could be found.' => 'Δεν ήταν δυνατόν να βρεθεί κάποιο token.',
    'Username could not be found.' => 'Το Username δε βρέθηκε.',
    'Account has expired.' => 'Ο λογαριασμός έχει λήξει.',
    'Credentials have expired.' => 'Τα στοιχεία σύνδεσης έχουν λήξει.',
    'Account is disabled.' => 'Ο λογαριασμός είναι απενεργοποιημένος.',
    'Account is locked.' => 'Ο λογαριασμός είναι κλειδωμένος.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This value is not a valid hostname.' => 'Cette valeur n\'est pas un nom d\'hôte valide.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Le nombre d\'éléments de cette collection doit être un multiple de {{ compared_value }}.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'messages' => 
  array (
    'produit.titre' => 'Liste des produits',
    'produit.add' => 'Ajouter un produit',
    'produit.nom' => 'Nom',
    'produit.description' => 'Description',
    'produit.quantite' => 'Quantité',
    'produit.prix' => 'Prix',
    'produit.categorie' => 'Catégorie',
    'produit.action' => 'Action',
    'produit.quantite01' => 'Quantité de produit en stock',
    'produit.delete' => 'Supprimer',
    'produit.save' => 'Sauvegarder',
    'produit.image' => 'Image',
    'produit.there_is' => 'Il y a nb produit/produits',
    'file.error' => 'Le fichier n\'a pas pu etre upload',
    'Nom' => 'Nom',
    'Description' => 'Description',
    'Qte' => 'Quantité',
    'Prix' => 'Prix',
    'Categorie' => 'Catégorie',
    'Photo' => 'Photo',
    'Sauvegarder' => 'Sauvegarder',
    'Qte01' => 'Quantité',
    'Save' => 'Ajouter au panier',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
