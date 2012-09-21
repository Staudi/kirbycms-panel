<?php

l::set(array(
  
  // global 
  'ok' => 'ok',
  'cancel' => 'Zrušiť',
  'nochanges' => 'Bez zmeny',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Odhlasiť', 
  
  // subheader
  'subheader.home' => 'Domov',  
  'subheader.site' => 'Názov stránky',
  'subheader.info' => 'Info',

  // tabs
  'tabs.overview' => 'Prehľad',
  'tabs.info' => 'Upraviť Info',
  'tabs.content' => 'Obsah',
  'tabs.files' => 'Súbory',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Náhľad',
  
  // dashboard
  'dashboard.edit' => 'Upraviť',
  'dashboard.content' => 'Obsah',
  'dashboard.content.empty' => 'Táto stránka nemá obsahu',
  'dashboard.files' => 'Súbory',
  'dashboard.template' => 'Šablóna',
  'dashboard.stats.images' => 'Obrázky', 
  'dashboard.stats.videos' => 'Videá', 
  'dashboard.stats.docs' => 'Documenty', 
  'dashboard.stats.sound' => 'Zvuky', 
  'dashboard.stats.others' => 'Iné', 

  // home
  'home.siteinfo' => 'Info o stránke',
  'home.edit' => 'Upraviť',
  'home.warning.title' => 'Prosím najskôr opravte!',
  'home.warning.permissions.title' => 'Práva',
  'home.warning.permissions.text' => 'Práva pre zložku z obsahom niesú správne. Prosím zmente práva pre všetky zložky na <strong>0755</strong> a všetky súbory na <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Plány',
  'home.warning.blueprints.text' => 'There are no blueprints available for the following templates<br /> Read more about <a href="http://getkirby.com/panel/blueprints">how to install blueprints for your templates</a>',
  'home.warning.thumbs.title' => 'Náhľady',
  'home.warning.thumbs.text' => 'Prosím vytvorte priečinok <strong>thumbs</strong> v hlavnej zložke stránky a zmente jej práva na <strong>0755</strong>',
  
  // siteinfo
  'siteinfo.button' => 'Uložiť',
  'siteinfo.errors.title' => 'Prosím priraďte názov',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> niesú zapisovatelné <br />Prosím zmente ich práva a skúste znova.',
  
  // content form 
  'content.save' => 'Uložiť',
  'content.previous' => 'Naspäť',
  'content.next' => 'Ďalej',
  'content.invisible' => 'Neviditeľný',
  
  // no content available
  'nocontent.title' => 'Bez obsahu',
  'nocontent.text' => 'Pre túto stránku neexistuje obsah.',
    
  // pages
  'pages.title' => 'Viditeľné stránky',
  'pages.title.home' => 'Stránky',
  'pages.home' => 'Domov',
  'pages.sort' => 'Zoradiť',
  'pages.add' => 'Pridať',
  'pages.delete' => 'Odstrániť',
  'pages.invisible' => 'Neviditeľné podstránky',
  'pages.invisible.home' => 'Neviditeľné stránky',
  'pages.no.visible' => 'Žiadne viditelné stránky',
  'pages.no.invisible' => 'Žiadne neviditelné stránky',
  'pages.moved' => 'Stránka bola premiestnená',
  'pages.sorted' => 'Stránka bola zoradená',
  'pages.show.more' => 'Zobraz viac',
  'pages.show.less' => 'Zobraz menej',
  'pages.errors.notfound' => 'Stránka nemohla byť nájdena',
  'pages.errors.move' => 'Stránka nemohla byť premiestnená',
  'pages.errors.sort' => 'Všetky stránky nemohli byť zoradené',
  'pages.errors.nosort' => 'Nieje čo zoradiť',

  // no subpages allowed
  'nopages.title' => 'Podstránky',
  'nopages.text' => 'Táto stránka by nemala mať podstránky',  
  
  // add page
  'pages.add.title' => 'Pridať novú stranku',
  'pages.add.label.title' => 'Názov',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Šablóna',
  'pages.add.button' => 'Uložiť',
  'pages.add.errors.title' => 'Prosím zadajte názov',
  'pages.add.errors.url' => 'Prosím zadajte URL',
  'pages.add.errors.characters' => 'Prosím použite len tieto znaky a-z, 0-9, _, - pre URL',
  'pages.add.errors.exists' => 'Stránka z rovnakou adresou už existuje',
  'pages.add.errors.permissions' => 'Priečinok sa nedá vytvoriť',
  'pages.add.success' => 'Stránka bola vytvorená',

  // update page
  'pages.update.errors.title' => 'Prosím zadajte názov',
    
  // delete page  
  'pages.delete.title' => 'Odstrániť stránku',
  'pages.delete.button' => 'Odstrániť',
  'pages.delete.errors.homepage' => 'Nemôžete odstrániť domovsku stránku',
  'pages.delete.errors.errorpage' => 'Nemožete odstrániť stránku z chybovým hlásením',
  'pages.delete.errors.subpages' => 'Táto stránka ma podstránky. Prosím odstránte ich najskôr.',
  'pages.delete.errors.permissions' => 'Stránka sa nedala odstrániť',
  'pages.delete.success' => 'Stránka bola odstránená',

  // options
  'options.url' => 'URL',
  'options.button' => 'Uložiť',
  'options.home.url' => 'URL',
  'options.home.text' => 'Nemôžete zmenit URL pre domovskú stránku',
  'options.error.text' => 'Nemôžete zmenit URL pre stránku s chybovým hlásením',
  'options.errors.homepage' => 'Nemôžete zmenit URL pre domovskú stránku',
  'options.errors.errorpage' => 'Nemôžete zmenit URL pre stránkus chybovým hlásením',
  'options.errors.characters' => 'Prosím použite len tieto znaky a-z, 0-9, _, -',
  'options.errors.permissions' => 'Zložka z obsáhom nemohla byť premiestnená',
  'options.errors.exists' => 'Nová adresa už existuje',
  'options.errors.move' => 'Zložka z obsáhom nemohla byť premiestnená',

  // files
  'files.title' => 'Súbory',
  'files.upload' => 'Nahrať nový súbor',
  'files.edit' => 'Upraviť',
  'files.replace' => 'Nahradiť',
  'files.delete' => 'Odstrániť',
  'files.empty' => 'Žiadne súbory',

  'nofiles.title' => 'Žiadne súbory',
  'nofiles.text' => 'Táto stránka by nemala mať súbory',
  
  // delete file
  'files.delete.title' => 'Odstrániť súbor',
  'files.delete.button' => 'Odstrániť',
  'files.delete.errors.notfound' => 'Súbor sa nepodarilo nájsť',
  'files.delete.errors.permissions' => 'Súbor sa nepodarilo odstrániť',
  'files.delete.success' => 'Súbor bol odstráneny',

  // edit file
  'files.edit.title' => 'Upraviť súbor',
  'files.edit.filename' => 'Názov súboru (bez prípony)',
  'files.edit.button' => 'Uložiť',
  'files.edit.errors.notfound' => 'Súbor sa nepodarilo nájsť',
  'files.edit.errors.exists' => 'Súbor s tým názvom už existuje',
  'files.edit.errors.permissions' => 'Súbor sa nepodarilo premenovať',
  'files.edit.success' => 'Súbor uložený',

  // replace file
  'files.replace.title' => 'Nahradiť súbor',
  'files.replace.file' => 'Súbor',
  'files.replace.choose' => 'Prosím zvolte nový subor z prečítača…',
  'files.replace.button' => 'Nahradiť',
  'files.replace.errors.notfound' => 'Súbor sa nepodarilo nájsť',
  'files.replace.success' => 'Súbor bol nahradený',

  // upload file
  'files.upload.title' => 'Nahrať nový súbor',
  'files.upload.choose' => 'Prosím zvolte subor z prečítača…',
  'files.upload.button' => 'Nahrať',
      
  // login  
  'login.button' => 'Prihlásit sa',
  'login.username' => 'Meno',
  'login.password' => 'Heslo',
  'login.error' => 'Invalid meno alebo Heslo',
  'login.success' => 'Úspešné prihlásenie',
  'login.error.browser.title' => 'Použiváťe zastaralý internetovy prehliadač',
  'login.error.browser.text' => 'Prosím použite najnovšiu verziu prehliadača Google Chrome, Firefox, Safari or Internet Explorer.',
  
  // upload
  'upload.errors.missing-file' => 'Súbor sa nepodralilo násť',
  'upload.errors.file-exists' => 'Súbor už existuje a nemôž byť nahradený',
  'upload.errors.invalid-upload' => 'Nahrávanie zlyhalo',
  'upload.errors.too-big' => 'Súbor je príliš velký',
  'upload.errors.invalid-file' => 'Typ súboru nieje povolený',
  'upload.errors.move-error' => 'Súbor sa nepodarilo preniesť na server',
  'upload.success' => 'Nahratie úsprešné',

  // writer
  'writer.errors.permissions' => 'Súbor nieje zapisovateľný',
  'writer.errors.write' => 'Nepodarilo sa pridať dáta',
  'writer.success' => 'Súbor bol uložený',
  
));

?>