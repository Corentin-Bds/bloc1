<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $tab = array(
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin viverra quis nibh vel volutpat. Curabitur at quam lorem. Maecenas posuere quis nisl a mollis. Donec vitae pharetra purus. Etiam arcu turpis, ultricies et condimentum in, accumsan non est. Donec elementum ex eros, sed accumsan arcu tempus et. Maecenas sed tincidunt metus, non cursus lacus. Aenean turpis velit, ultricies quis nulla a, aliquet laoreet orci.",
        "Ut in tellus nec diam suscipit tristique a sit amet leo. Praesent imperdiet massa vitae tortor ultricies, nec elementum metus iaculis. In posuere est felis, vitae dignissim leo efficitur quis. Vestibulum tincidunt interdum ullamcorper. Morbi laoreet nulla quis rutrum facilisis. Sed iaculis arcu ligula, ut luctus ante ultrices vitae. Morbi faucibus urna molestie quam posuere, nec sollicitudin erat congue. Nunc vehicula gravida tortor nec vehicula. Donec dictum mi efficitur est pellentesque, sit amet pretium quam tempor. Aenean vel elit varius, accumsan arcu a, volutpat tellus. Curabitur id vestibulum libero. Sed ac euismod nisi.",
        "Praesent quis sem consequat, aliquet quam in, porta mauris. Nulla eu elit mauris. Praesent non posuere purus. Morbi molestie, metus eu malesuada gravida, orci magna pellentesque enim, vitae posuere tellus mi vel justo. Curabitur elementum purus vitae lobortis blandit. Duis convallis mauris id lorem venenatis, ut ultrices odio dapibus. Donec non sem et nunc pellentesque posuere eget egestas nisi. Nullam vulputate arcu eu odio porttitor congue. Maecenas sed bibendum metus.",
        "Curabitur consequat velit vitae erat venenatis, in vestibulum odio congue. Maecenas condimentum laoreet lobortis. Nunc semper mauris sed mollis consectetur. Etiam sodales, turpis vitae pellentesque hendrerit, tellus velit lobortis velit, nec mattis urna libero vel justo. Morbi faucibus turpis a ligula placerat tincidunt. Duis non tristique neque, at cursus dolor. Ut at elementum quam. Vivamus tempor bibendum ipsum, vitae viverra urna posuere ac. Curabitur semper leo sed magna dictum, id tempor elit convallis.",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vehicula lorem eget nibh pellentesque, et interdum ipsum viverra. Nulla gravida ultrices turpis et varius. Curabitur tempor lectus sed libero semper congue in non mi. Nulla eleifend tincidunt nulla vel rhoncus. Quisque interdum, arcu consequat rhoncus convallis, nulla libero ornare risus, vitae fermentum elit felis quis tellus. Nulla facilisi. Nullam finibus ex sit amet arcu malesuada, et tempor magna tincidunt. Curabitur elementum finibus lectus, et aliquam augue efficitur at. Quisque scelerisque dui erat, nec pulvinar lorem finibus nec. Cras pharetra sapien ut orci faucibus maximus. Cras cursus facilisis efficitur. Aliquam sagittis vel felis in lobortis. Nam commodo pharetra elit condimentum condimentum.",
        "Mauris a neque vel libero imperdiet imperdiet ut eget lacus. In dapibus interdum interdum. Morbi non turpis urna. Fusce pellentesque tincidunt leo, condimentum varius ipsum tincidunt vel. Sed ut tempus nulla, vel iaculis lorem. Pellentesque ultricies lectus et convallis accumsan. Maecenas molestie lacus ornare ante lobortis tempor. Ut auctor dignissim ex vitae dapibus. Praesent placerat in nulla nec vestibulum.",
        "Nulla in erat elit. Vestibulum id posuere dolor, ut iaculis ipsum. Mauris eget purus rhoncus, placerat neque ac, accumsan urna. Aenean fermentum et felis quis accumsan. Proin efficitur, augue eget maximus iaculis, justo magna vulputate nulla, eu ultricies ex purus eget tellus. Cras pulvinar libero at eleifend maximus. Cras eget fringilla nunc. Curabitur lobortis lacinia sapien, ut suscipit metus eleifend eleifend. Phasellus pulvinar turpis id metus cursus sodales. Proin ultrices purus in leo lacinia fringilla. Aliquam posuere venenatis cursus. Integer ultricies semper iaculis. Quisque consectetur semper vehicula.",
        "Aenean dignissim ac ipsum suscipit cursus. Praesent sed enim ex. In euismod leo ac urna sollicitudin efficitur. Phasellus vulputate nulla sed magna gravida mattis. Etiam sed pulvinar tortor. Nunc pharetra ex lacus, ut scelerisque turpis ullamcorper sed. Mauris imperdiet mollis malesuada. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut consequat nisi vitae metus tincidunt tincidunt. Cras placerat odio ut enim egestas mollis.",
        "Maecenas at diam non odio tincidunt dapibus. Cras dapibus dictum augue ultricies elementum. Quisque id ipsum lorem. Aliquam ut odio id ligula blandit interdum ac ac arcu. Mauris consectetur convallis dolor et dictum. In hac habitasse platea dictumst. Integer rutrum vitae odio a egestas. Aliquam sed massa id nibh fringilla suscipit. Duis congue, diam non imperdiet hendrerit, libero metus vehicula dui, nec cursus magna felis eget mi. Pellentesque in est mi. Pellentesque hendrerit tempor tellus, et vehicula augue vulputate in. Ut consectetur porttitor dui nec pretium.",
        "Aliquam bibendum rutrum dapibus. Nunc sit amet massa eu nulla aliquam gravida quis in lorem. Pellentesque blandit molestie arcu ac laoreet. Cras vulputate mattis purus, vel consequat justo efficitur et. Praesent ultricies erat vestibulum, pellentesque tellus vitae, rutrum risus. Donec vitae neque vel felis pulvinar semper sollicitudin in ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla facilisis accumsan interdum.",
        "Nunc efficitur erat non cursus scelerisque. Proin quis tortor sed mi interdum pellentesque sed non magna. Phasellus congue dictum lacus sed imperdiet. Sed feugiat malesuada mauris quis consectetur. Mauris elementum magna mauris, a fermentum diam aliquet id. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam dignissim accumsan orci, sed mattis magna venenatis ut. Aliquam tincidunt accumsan facilisis. Donec et augue vel turpis posuere maximus vitae vel diam.",
        "Donec aliquam nulla quis elementum facilisis. Fusce eget condimentum libero. Integer consequat, sem sit amet congue sodales, neque libero venenatis sapien, eget congue arcu mi eu leo. Quisque vestibulum maximus libero, sed faucibus risus gravida at. Nullam pellentesque mauris tortor. Morbi pretium mattis tellus vitae suscipit. Etiam lobortis, odio at viverra tempor, justo ex pretium tellus, at feugiat turpis elit eget erat. Vivamus mattis mauris quis lacus varius, vel imperdiet ex dictum. Vestibulum tristique vel lectus ac dapibus. Fusce eu velit tellus. Ut id elementum tortor. Sed odio nulla, fringilla ac finibus vel, fringilla non nulla.",
        "Cras ac gravida dui. Praesent fringilla placerat ex vitae lacinia. Fusce non mi vel tellus luctus imperdiet. Morbi ac vehicula tellus. Donec id blandit ex. Suspendisse facilisis egestas accumsan. Vestibulum in elit non tellus volutpat euismod ultricies auctor sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla dictum vulputate lorem ut facilisis. Donec placerat tempus maximus. Vestibulum varius sapien ut lacus maximus, id tempus nibh dignissim. Integer porta pharetra malesuada. Ut finibus auctor accumsan. Nunc egestas augue felis, at pharetra ante tincidunt vitae. Praesent ut tristique leo.",
        "Vivamus fringilla nulla placerat vestibulum mattis. Phasellus interdum nunc tortor, nec tristique ligula posuere a. Suspendisse non placerat tellus. Proin nec nunc vulputate, sollicitudin leo vitae, placerat sem. In consequat, libero et cursus ultrices, odio leo eleifend mauris, sit amet egestas purus nulla vitae magna. Aliquam vulputate lacus at orci posuere, non aliquet purus mattis. Proin mollis nunc nisi, id fringilla risus volutpat sit amet.",
        "Vivamus a arcu sed mi finibus molestie at et velit. Sed sollicitudin orci quis nunc laoreet porta. Ut varius ligula in nulla ultricies mollis. Nam id fermentum arcu. Donec est ante, sagittis vitae sodales non, lobortis in massa. Pellentesque rutrum, tortor sed accumsan pretium, metus odio vehicula est, maximus molestie neque turpis nec risus. Duis sodales ante quis pellentesque vehicula. In dictum feugiat nulla sit amet fermentum. Sed blandit euismod lorem id tincidunt. Fusce vel velit id magna ultricies posuere.",
        "Praesent cursus et lorem suscipit cursus. Donec eget turpis dui. Nulla feugiat congue mi sit amet gravida. Pellentesque magna diam, porta vel lectus ut, ornare pharetra sem. Donec ut nibh lectus. Sed ex quam, rutrum et fringilla non, aliquam quis ex. Vestibulum ut luctus urna, quis malesuada augue. Nullam laoreet, nisl ac vehicula dapibus, arcu tellus blandit massa, a maximus est nibh vel dolor. In auctor bibendum sapien ac congue. Phasellus posuere risus nulla, et mattis mauris volutpat quis. Praesent ac massa arcu. Aliquam elementum tellus pretium vehicula rutrum. Proin lobortis egestas dui, quis imperdiet augue tempus ac.",
        "Cras rutrum, leo et ornare pulvinar, nibh dui porta lacus, nec interdum enim mauris sit amet ex. Ut accumsan fringilla semper. Donec luctus pretium lacus, in mattis dolor ornare non. Cras ac turpis a purus condimentum ultrices. Pellentesque vitae blandit purus. Donec ullamcorper finibus ullamcorper. Nam convallis eros sed nunc mattis faucibus. Aliquam sed fermentum nibh. Quisque euismod eget odio eget bibendum. Suspendisse et leo eu neque sagittis elementum. Suspendisse rutrum magna viverra, sagittis eros non, interdum lectus. Aliquam erat volutpat. Sed ullamcorper maximus maximus. Aliquam sagittis congue massa, at maximus orci porta quis.",
        "Aenean id nibh risus. Sed imperdiet, lacus quis maximus blandit, ex urna ultricies nulla, vitae mollis ligula ligula a odio. Aenean iaculis magna a pulvinar accumsan. Integer elementum vestibulum enim eget luctus. Sed hendrerit, tortor id molestie interdum, erat nibh cursus lorem, vitae congue risus tellus eu justo. Curabitur interdum sapien id lacus vulputate, ut pharetra erat commodo. Nulla eu purus accumsan, vestibulum dui a, porttitor justo. Duis non leo eget justo tempus dignissim tincidunt at nisi.",
        "Curabitur tincidunt nisi in ipsum facilisis interdum. Nullam ut dapibus massa. In elementum magna consequat, semper orci in, lacinia eros. Ut sagittis semper lacinia. Duis commodo dolor quam, id egestas lectus interdum viverra. Nam posuere condimentum sollicitudin. Mauris ullamcorper tempor libero, et eleifend tellus pulvinar id. Phasellus vel quam nisl. Quisque tellus tortor, aliquet a felis ut, lacinia congue purus. Pellentesque ac ex nisi. Proin ac consectetur elit. Ut et ultrices odio. Suspendisse eget lobortis sem. Sed non risus nisi.",
        "Vivamus lobortis faucibus dignissim. Vivamus vitae fringilla odio, quis lobortis nunc. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi in nulla bibendum, condimentum ipsum id, viverra erat. Ut eu posuere nulla, a fringilla orci. Nulla risus diam, efficitur non tristique vel, sollicitudin sit amet velit. Etiam eleifend nunc in odio aliquam viverra. Fusce felis dui, posuere vel nisl eget, sodales gravida nisl.",
        "Suspendisse condimentum condimentum mauris et varius. Vivamus scelerisque quam quis aliquam sagittis. Nunc nunc elit, lacinia et mollis quis, lacinia in lacus. Nam nulla nunc, ornare et ex eget, tempor pulvinar libero. Duis sed enim in lectus sagittis auctor. Praesent quis magna congue, luctus tellus id, fermentum sem. Curabitur vestibulum at nisi at porttitor. Vestibulum lacinia neque libero, eleifend hendrerit felis lobortis non.",
        "Mauris sem justo, ultricies in arcu mollis, ornare efficitur tellus. Quisque dolor tellus, ultricies in orci at, gravida elementum magna. Sed eu consequat metus. Nunc velit ipsum, mattis in egestas quis, aliquam vel felis. Quisque velit lorem, posuere in suscipit et, vehicula rutrum lectus. Mauris quis tortor vel dolor viverra suscipit. Aliquam nec justo porttitor, ullamcorper neque ut, ultrices magna. Maecenas posuere efficitur turpis non gravida. Ut vel condimentum dui.",
        "Nulla ullamcorper velit ultricies, interdum eros non, sagittis elit. Maecenas nec nunc leo. In lacus ipsum, malesuada ut metus pellentesque, fringilla aliquet nibh. Nam sodales luctus tellus eu tempus. Nulla pharetra efficitur massa nec convallis. Nam fringilla nec quam a blandit. Aliquam ut magna semper libero tristique sodales quis ac orci. Quisque pellentesque eget magna ac cursus. Nulla mollis ligula nec vulputate elementum.",
        "Vestibulum ornare ex eget luctus rhoncus. Ut non lectus metus. Nulla aliquet massa in massa tincidunt, sit amet hendrerit ipsum facilisis. Donec augue lectus, ullamcorper non accumsan tincidunt, accumsan eu velit. Quisque scelerisque pretium lorem, eu vehicula sapien ultricies vitae. Suspendisse suscipit tincidunt vestibulum. Nullam vel magna sit amet erat auctor viverra. Donec sit amet mollis tortor, nec vulputate risus. Quisque non dictum ante. Nulla quis nunc quis quam semper mattis. In ultrices nulla et lectus lacinia tristique. Curabitur venenatis nulla a lacus lobortis fringilla.",
        "Fusce eget feugiat metus, vel porta erat. Pellentesque vel fringilla magna, eu rutrum turpis. Vivamus at molestie lorem. Morbi tempor nisi a dolor pretium cursus. Donec nec sodales nisl. In tempus volutpat tincidunt. Ut rutrum fermentum nibh. Cras id magna aliquam, pellentesque lacus ut, congue ligula. Donec nec leo laoreet, elementum est non, dignissim mauris.",
        "raesent eget dolor bibendum, tristique mi et, viverra urna. Aliquam et nulla ullamcorper, mollis velit dictum, pretium leo. Suspendisse potenti. Sed varius nisl et pharetra laoreet. Suspendisse eu auctor turpis. Maecenas sit amet ante eget nibh efficitur mattis non vitae purus. Pellentesque vel risus nec ex porta eleifend. Pellentesque vel dui eu orci interdum finibus. Donec vel sagittis nulla. Suspendisse accumsan ante vel dui dictum euismod. Phasellus ultrices, nulla mattis convallis facilisis, massa mi tincidunt ipsum, sed malesuada ipsum metus sed leo. Phasellus porta lorem urna, vel bibendum ante egestas ac. Sed vitae luctus metus. Phasellus vulputate justo vitae dolor ultrices, at aliquam odio accumsan. Proin sem metus, viverra ut lorem ac, fermentum suscipit quam.",
        "Etiam sed interdum leo. In non justo sit amet justo ultrices semper. Morbi faucibus pellentesque felis id sollicitudin. Curabitur semper felis at justo interdum condimentum. Aliquam porttitor eros et nisl rhoncus suscipit vitae vitae mauris. Pellentesque iaculis blandit urna, vel pretium erat viverra ac. Sed vulputate nisl sapien, tempus porta diam venenatis a. Fusce sollicitudin mauris ut orci elementum, sed mollis tortor pulvinar. Nunc vel nulla nisi. Sed iaculis volutpat ultrices.",
        "Sed auctor, sapien ultricies hendrerit vulputate, sapien dolor malesuada urna, eget viverra tortor libero nec arcu. Sed ullamcorper turpis ac justo tincidunt venenatis. Suspendisse ultrices, diam quis efficitur malesuada, augue ipsum hendrerit nulla, non pretium eros magna id ligula. Integer ut ex ut sapien sollicitudin commodo at vitae neque. Pellentesque a pharetra erat. Nam id facilisis mauris. Donec in vulputate felis. Proin nec nulla sagittis, commodo nulla nec, bibendum eros.",
        "Sed et diam id nisl laoreet elementum. Aliquam vel vulputate libero. Phasellus suscipit nibh sed ligula placerat, eu pharetra elit tincidunt. Proin lacinia iaculis elementum. Vestibulum sed posuere magna. Sed accumsan dui sem, in dapibus nisl porttitor sed. Duis tempor tincidunt consectetur.",
        "Mauris suscipit nisi eros, nec pretium enim congue et. Fusce nisi dui, faucibus eu ligula quis, tincidunt vehicula massa. Mauris volutpat, quam aliquam placerat maximus, mi leo vulputate neque, vel pellentesque orci leo commodo turpis. Suspendisse fermentum eleifend massa, sed auctor nisi semper quis. Praesent volutpat auctor nisi a cursus. Maecenas dapibus, enim vulputate pellentesque tincidunt, leo tortor ultrices tortor, vel dignissim turpis nunc in metus. Fusce fermentum gravida tellus, et egestas nisi. Maecenas bibendum eu metus nec pulvinar. Proin vulputate augue ac sem ullamcorper, sit amet vestibulum magna auctor. Maecenas mi neque, consequat a turpis a, semper ultrices sem. Etiam consectetur mollis eros, ac iaculis dui. Sed iaculis urna sit amet enim rhoncus, vel laoreet justo aliquam. Mauris sed purus non ipsum pulvinar aliquet. Mauris sit amet odio urna. Vestibulum pharetra sapien nec imperdiet convallis.",
        );

        $paragraphe = '';
        $paragraphe1 = $_POST['paragraphe1'];
        $j = 0;

        for ($i=0;$i<$paragraphe1;$i++){
            $paragraphe .= $tab[$j];
            $j++;
            if($i==count($tab)){
                $j=0;
            }
        }
    ?>

    <form action="Lorem-ipsum-gen.php" method="POST">
        <textarea name="paragraphe" cols="30" rows="10" readonly="readonly" value="<?=$paragraphe1?>"><?=$paragraphe?></textarea>
        <input type="number" name="paragraphe1" max="30" min="1">
        <input type="submit">    
    </form>
</body>
</html>