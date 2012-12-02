<?php

l::set(array(
  
  // global 
  'ok' => 'Ok',
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
  'dashboard.content.empty' => 'Na tejto stránke nieje žiaden obsah',
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
  'home.warning.blueprints.text' => 'Žiadne plány pre túto šablónu niesu k dispozícii <br /> Viac info na <a href="http://getkirby.com/panel/blueprints">ako pridať plány pre šablóny</a>',
  'home.warning.thumbs.title' => 'Náhľady',
  'home.warning.thumbs.text' => 'Prosím vytvorte priečinok <strong>thumbs</strong> v hlavnej zložke stránky a zmente jej práva na <strong>0755</strong>',
  
  // siteinfo
  'siteinfo.button' => 'Uložiť',
  'siteinfo.errors.title' => 'Prosím priraďte názov',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> nieje zapisovatelný <br />Prosím zmente práva a skúste znova.',
  
  // content form 
  'content.save' => 'Uložiť',
  'content.previous' => 'Naspäť',
  'content.next' => 'Ďalej',
  'content.invisible' => 'Neviditeľný',
  
  // no content available
  'nocontent.title' => 'Bez obsahu',
  'nocontent.text' => 'Na tejto stránke nieje žiaden obsah',
    
  // pages
  'pages.title' => 'Viditeľné podstránky',
  'pages.title.home' => 'Viditeľné stránky',
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
  'pages.show.more' => 'Ukáž viac',
  'pages.show.less' => 'Ukáž menej',
  'pages.errors.notfound' => 'Stránku sa nepodarilo nájsť',
  'pages.errors.move' => 'Stránka nemohla byť premiestnená',
  'pages.errors.sort' => 'Nie všetky stránky mohli byť zoradené',
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
  'pages.update.errors.title' => 'Prosím vyplnte správne všetky polička',
    
  // delete page  
  'pages.delete.title' => 'Odstrániť stránku',
  'pages.delete.button' => 'Odstrániť',
  'pages.delete.errors.homepage' => 'Nemôžete odstrániť domovsku stránku',
  'pages.delete.errors.errorpage' => 'Nemožete odstrániť stránku z chybovým hlásením',
  'pages.delete.errors.subpages' => 'Táto stránka ma podstránky. Prosím najskôr ich odstránte .',
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
  'files.edit.errors.filename' => 'Prosím vložte platný názov súboru',
  'files.edit.errors.notfound' => 'Súbor sa nepodarilo nájsť',
  'files.edit.errors.exists' => 'Súbor s rovnaký názvom už existuje',
  'files.edit.errors.permissions' => 'Súbor sa nepodarilo premenovať',
  'files.edit.success' => 'Súbor uložený',

  // replace file
  'files.replace.title' => 'Nahradiť súbor',
  'files.replace.file' => 'Súbor',
  'files.replace.choose' => 'Prosím zvolte nový subor z počítača…',
  'files.replace.button' => 'Nahradiť',
  'files.replace.errors.notfound' => 'Súbor sa nepodarilo nájsť',
  'files.replace.success' => 'Súbor bol nahradený',

  // upload file
  'files.upload.title' => 'Nahrať nový súbor',
  'files.upload.choose' => 'Prosím zvolte subor z počítača…',
  'files.upload.button' => 'Nahrať',
      
  // login  
  'login.button' => 'Prihlásit sa',
  'login.username' => 'Meno',
  'login.password' => 'Heslo',
  'login.error' => 'Neplatné meno alebo Heslo',
  'login.success' => 'Úspešné prihlásenie',
  'login.error.browser.title' => 'Použiváťe zastaralý internetovy prehliadač',
  'login.error.browser.text' => 'Prosím použite najnovšiu verziu prehliadača Google Chrome, Firefox, Safari alebo Internet Explorer.',
  
  // upload
  'upload.errors.missing-file' => 'Súbor sa nepodralilo násť',
  'upload.errors.file-exists' => 'Súbor už existuje a nemôže byť nahradený',
  'upload.errors.invalid-upload' => 'Nahrávanie zlyhalo',
  'upload.errors.too-big' => 'Súbor je príliš velký',
  'upload.errors.invalid-file' => 'Typ súboru nieje povolený',
  'upload.errors.move-error' => 'Súbor sa nepodarilo nahrať na server',
  'upload.success' => 'Nahratie úsprešné',

  // writer
  'writer.errors.permissions' => 'Súbor nieje zapisovateľný',
  'writer.errors.write' => 'Nepodarilo sa pridať dáta',
  'writer.success' => 'Súbor bol uložený',
  
  // form buttons
  'form.buttons.h1' => 'h1',
  'form.buttons.h2' => 'h2',
  'form.buttons.h3' => 'h3',
  'form.buttons.bold' => 'tučne',
  'form.buttons.bold.sample' => 'tučný text',
  'form.buttons.italic' => 'nakloniť',
  'form.buttons.italic.sample' => 'naklonení text',
  'form.buttons.link' => 'link',
  'form.buttons.email' => 'email',

  'form.overlay.link.title' => 'Vložiť Link',
  'form.overlay.link.link' => 'Link',
  'form.overlay.link.text' => 'Text Linku (nepovinné)',
  'form.overlay.link.button' => 'Vložiť Link',

  'form.overlay.email.title' => 'Vložiť Email',
  'form.overlay.email.link' => 'Emailová Adresa',
  'form.overlay.email.text' => 'Text Linku (nepovinné)',
  'form.overlay.email.button' => 'Vložiť Email',

));