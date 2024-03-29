<?php

require_once 'Database.php';
$minerals = Database::getInstance()->getAllMinerals();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minerals Of The World</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="https://www.clipartmax.com/png/middle/178-1789670_mineral-icon-minerals-icon.png">
  <script defear src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
</head>

<body>
  <div class="header">
    <img src="slike/header.png" alt="mineral" id="mineral">
  </div>

  <div id="title">
    <img src="slike/minerals of the World.png" alt="title" id="motw">
    <h3>Here you can see the real beauties mother Earth provides us!</h3>

   
  </div>
  

  <div id="content">
    <div class="buttons">
    <a href="table.php" id="t">Table with our Minerals</a>  
    <a href="insert.php?un=aleksa" id="pr">Add a product</a>
    <a href="https://www.spiriferminerals.com/" id="spirifer">Visit another website</a>
    <a href="admin.html" id="cv">Admin profile</a>
    
    </div>
    <div class="breakDiv"></div>

    <div id=smallCrystalDiv>
      <img src="slike/smallCrystal.jpg" alt="smallCrystal" id="smallCrystal">
      <img src="slike/smallCrystal.jpg" alt="smallCrystal" id="smallCrystal">
      <img src="slike/smallCrystal.jpg" alt="smallCrystal" id="smallCrystal">
      <img src="slike/smallCrystal.jpg" alt="smallCrystal" id="smallCrystal">
      <img src="slike/smallCrystal.jpg" alt="smallCrystal" id="smallCrystal">
      <img src="slike/smallCrystal.jpg" alt="smallCrystal" id="smallCrystal">
      <img src="slike/smallCrystal.jpg" alt="smallCrystal" id="smallCrystal">
      
    </div>

    <h2 id="c">Products:</h2> <br><br><br>

    Sort by: <span class="nameSort">Name</span> | <span class="priceSortAsc">Price ascending</span> | <span class="priceSortDesc">Price descending</span> <br>
    Search: <input type="text" class="searchInput"> <br> <br>

    <div class="allProducts">

      <?php foreach ($minerals as $mineral) : ?>
        <div class="product">
          <a href="post.php?id=<?php echo $mineral['id']; ?>"><img class="mineral-image" src="<?php echo $mineral['img']; ?>" alt="Baryte"></a>
          <p>username: <?php echo $mineral['username']; ?></p><br>
          <p>mineral: <?php echo $mineral['title']; ?></p><br>
          <p>locality: <?php echo $mineral['locality']; ?></p><br>
          <p>price: $<?php echo $mineral['price']; ?></p><br>
          <br><br><br>
        </div>
      <?php endforeach; ?>

    </div>

    <div id=smallCrystalDiv>
      <img src="slike/smallCrystal.jpg" alt="smallCrystal" id="smallCrystal">
      <img src="slike/smallCrystal.jpg" alt="smallCrystal" id="smallCrystal">
      <img src="slike/smallCrystal.jpg" alt="smallCrystal" id="smallCrystal">
      <img src="slike/smallCrystal.jpg" alt="smallCrystal" id="smallCrystal">
      <img src="slike/smallCrystal.jpg" alt="smallCrystal" id="smallCrystal">
      <img src="slike/smallCrystal.jpg" alt="smallCrystal" id="smallCrystal">
      <img src="slike/smallCrystal.jpg" alt="smallCrystal" id="smallCrystal">
    </div>

    <p>In geology and mineralogy, a mineral or mineral species is, broadly speaking,
      a solid chemical compound with a fairly well-defined chemical composition and a specific
      crystal structure, that occurs naturally in pure form.</p>
    <p>The geological definition of mineral normally excludes compounds that
      occur only in living beings. However some minerals are often biogenic
      (such as calcite) or are organic compounds in the sense of chemistry (such as mellite).
      Moreover, living beings often synthesize inorganic minerals (such as hydroxylapatite) that also occur in
      rocks.
      The concept of mineral is distinct from rock, any bulk solid geologic material
      that is relatively homogeneous at a large enough scale. A rock may consist of
      one type of mineral, or may be an aggregate of two or more different types of
      minerals, spacially segregated into distinct phases.</p>
    <p> Some natural solid substances without a definite crystalline structure,
      such as opal or obsidian, are more properly called mineraloids. If a chemical
      compound occurs naturally with different crystal structures, each structure is
      considered a different mineral species. Thus, for example, quartz and stishovite are
      two different minerals consisting of the same compound, silicon dioxide.</p>
    <p>The International Mineralogical Association has established the following requirements for a substance to be
      considered a distinct mineral:

      It must be a naturally occurring substance formed by natural geological processes, on Earth or other
      extraterrestrial bodies. This excludes compounds directly and exclusively generated by human activities
      (anthropogenic) or in living beings (biogenic), such as tungsten carbide, urinary calculi, calcium oxalate
      crystals in plant tissues, and seashells. <br><br> However, substances with such origins may qualify if
      geological processes were involved in their genesis (as is the case of evenkite, derived from plant
      material; or taranakite, from bat guano; or alpersite, from mine tailings). Hypothetical substances are
      also excluded, even if they are predicted to occur in currently inaccessible natural environments like the
      Earth's core or other planets. <br>
      It must be a solid substance in its natural occurrence. A major exception to this rule is native mercury: it
      is still classified as a mineral by the IMA, even though crystallizes only below −39 °C, because it was
      included before the current rules were established. Water and carbon dioxide are not considered
      minerals, even though they are often found as inclusions in other minerals; but water ice is considered a
      mineral. <br><br>
      It must have a well-defined crystallographic structure; or, more generally, an ordered atomic
      arrangement. This property implies several macroscopic physical properties, such as crystal form,
      hardness, and cleavage. It excludes ozokerite, limonite, obsidian and many other amorphous
      (non-crystalline) materials that occur in geologic contexts.
      It must have a fairly well defined chemical composition. However, certain crystalline substances with a
      fixed structure but variable composition may be considered single mineral species. A common class of
      examples are solid solutions such as mackinawite, (Fe, Ni)9S8, which is mostly a ferrous sulfide with a
      significant fraction of iron atoms replaced by nickel atoms. Other examples include layered crystals
      with variable layer stacking, or crystals that differ only in the regular arrangement of vacancies and
      substitutions. On the other hand, some substances that have a continuous series of compositions, may be
      arbitrarily split into several minerals. The typical example is the olivine group (Mg, Fe)2SiO4, whose
      magnesium-rich and iron-rich end-members are considered separate minerals (forsterite and fayalite).</p>
  </div>

  <div class="breakDiv"></div>

  <div id="footer">
    <h4>Natures Treasures Company</h4>
    <h5>Bulevar Mihajla Pupina 199b, Belgrade, Serbia</h5>
    <h5>Mobile: +381631230998</h5>
    <h5>Email: aleksa.djordjevic2312@gmail.com</h5>
  </div>

  <script src="app.js"></script>
</body>

</html>