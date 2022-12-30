<?php

/**
 * Class Graph
 */

class Graph
{
  /**
   * @var string
   */
  protected $type;

  /**
   * @var string
   */
  protected $title = 'graphique';

  /**
   * @var int
   */
  protected $width = 600;

  /**
   * @var int
   */
  protected $height = 400;

  /**
   * @var int
   */
  protected $widthLegend = 200;

  /**
   * @var bool
   */
  protected $legend = true;

  /**
   * @var bool
   */
  protected $legendVal = true;

  /**
   * @var bool
   */
  protected $autodVal = true;

  /**
   * @var string
   */
  protected $chemin = 'graph';

  /**
   * @var string
   */
  protected $ordre;

  /**
   * @var string
   */
  protected $couleur = '0.0.0';

  /**
   * @var int
   */
  protected $marge = 20;

  /**
   * @var int
   */
  protected $margeX = 20;
  /**
   * @var int
   */
  protected $margeY = 20;

  /**
   * @var bool
   */
  protected $sav = false;

  /**
   * @var string
   */
  protected $nime = 'webp';

  /**
   * Get the value of marge
   *
   * @return  int
   */
  public function getMarge()
  {
    return $this->marge;
  }

  /**
   * Set the value of marge
   *
   * @param  int  $marge
   *
   * @return  self
   */
  public function setMarge(int $marge)
  {
    $this->marge = $marge;

    return $this;
  }

  /**
   * Get the value of ordre
   *
   * @return  string
   */
  public function getOrdre()
  {
    return $this->ordre;
  }

  /**
   * Set the value of ordre
   *
   * @param  string  $ordre
   *
   * @return  self
   */
  public function setOrdre(string $ordre)
  {
    if (!empty($ordre)) {
      if ($ordre == "c" || $ordre == "d") {
        $this->ordre = $ordre;
      } else {
        $this->ordre = null;
      }
    }


    return $this;
  }
  /**
   * Get the value of legend
   * @return bool
   */
  public function getLegend()
  {
    return $this->legend;
  }

  /**
   * Set the value of legend
   *@param  bool  $legend
   * @return  self
   */
  public function setLegend(bool $legend)
  {
    $this->legend = $legend;

    return $this;
  }
  /**
   * Get the value of sav
   * @return bool
   */
  public function getSav()
  {
    return $this->sav;
  }

  /**
   * Set the value of sav
   *@param  bool  $sav
   * @return  self
   */
  public function setSav(bool $sav)
  {
    $this->sav = $sav;

    return $this;
  }
  /**
   * Get the value of Title
   * @return bool
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * Set the value of Title
   *@param  string  $Title
   * @return  self
   */
  public function setTitle(bool $title)
  {
    $this->title = $title;

    return $this;
  }
  /**
   * Get the value of width
   *
   * @return  int
   */
  public function getWidth()
  {
    return $this->width;
  }

  /**
   * Set the value of width
   *
   * @param  int  $width
   *
   * @return  self
   */
  public function setWidth(int $width)
  {
    if ($width <= 100) {
      $width = 200;
    }
    if (empty($width) && !empty($this->height)) {
      $width = $this->height;
    }
    if (empty($this->height)) {
      $this->height = $width / 1.5;
    }
    $this->width = $width;

    return $this;
  }

  /**
   * Get the value of height
   *
   * @return  int
   */
  public function getHeight()
  {
    return $this->height;
  }

  /**
   * Set the value of height
   *
   * @param  int  $height
   *
   * @return  self
   */
  public function setHeight(int $height)
  {
    if ($height <= 100) {
      $height = 200;
    }
    if (empty($height) && !empty($this->width)) {
      $height = $this->width;
    }
    if (empty($this->width)) {
      $this->width = $height * 1.5;
    }
    $this->height = $height;

    return $this;
  }

  /**
   * Get the value of legendVal
   *
   * @return  bool
   */
  public function getLegendVal()
  {
    return $this->legendVal;
  }

  /**
   * Set the value of legendVal
   *
   * @param  bool  $legendVal
   *
   * @return  self
   */
  public function setLegendVal(bool $legendVal)
  {
    $this->legendVal = $legendVal;

    return $this;
  }

  /**
   * Get the value of type
   *
   * @return  string
   */
  public function getType()
  {
    return $this->type;
  }

  /**
   * Set the value of type
   *
   * @param  string  $type
   *
   * @return  self
   */
  public function setType(string $type)
  {
    $typ = ['col', 'bar', 'pie'];

    if (!in_array($type, $typ)) {
      $type = 'col';
    }
    $this->type = $type;

    return $this;
  }

  /**
   * Get the value of nime
   *
   * @return  string
   */
  public function getNime()
  {
    return $this->nime;
  }

  /**
   * Set the value of nime
   *
   * @param  string  $nime
   *
   * @return  self
   */
  public function setNime(string $nime)
  {
    $typ = ['png', 'webp', 'jpg', 'gif'];

    if (!in_array($nime, $typ)) {
      $nime = 'webp';
    }
    $this->nime = $nime;

    return $this;
  }
  /**
   * Get the value of margeX
   *
   * @return  int
   */
  public function getMargeX()
  {
    return $this->margeX;
  }

  /**
   * Set the value of margeX
   *
   * @param  int  $margeX
   *
   * @return  self
   */
  public function setMargeX(int $margeX)
  {
    if (!empty($margeX)) {
      $margeX = $this->marge;
    }
    $this->margeX = $margeX;

    return $this;
  }

  /**
   * Get the value of margeY
   *
   * @return  int
   */
  public function getMargeY()
  {
    return $this->margeY;
  }

  /**
   * Set the value of margeY
   *
   * @param  int  $margeY
   *
   * @return  self
   */
  public function setMargeY(int $margeY)
  {
    if (!empty($margeY)) {
      $margeY = $this->marge;
    }
    $this->margeY = $margeY;

    return $this;
  }

  /**
   * Get the value of widthLegend
   *
   * @return  int
   */
  public function getWidthLegend()
  {
    return $this->widthLegend;
  }

  /**
   * Set the value of widthLegend
   *
   * @param  int  $widthLegend
   *
   * @return  self
   */
  public function setWidthLegend(int $widthLegend)
  {
    if (empty($widthLegend)) {
      $widthLegend = 200;
    }
    $this->widthLegend = $widthLegend;

    return $this;
  }
  /**
   * Get the value of autodVal
   *
   * @return  bool
   */
  public function getAutodVal()
  {
    return $this->autodVal;
  }

  /**
   * Set the value of autodVal
   *
   * @param  bool  $autodVal
   *
   * @return  self
   */
  public function setAutodVal(bool $autodVal)
  {
    $this->autodVal = $autodVal;

    return $this;
  }

  /**
   * Get the value of chemin
   *
   * @return  string
   */
  public function getChemin()
  {
    return $this->chemin;
  }

  /**
   * Set the value of chemin
   *
   * @param  string  $chemin
   *
   * @return  self
   */
  public function setChemin(string $chemin)
  {
    $this->chemin = $chemin;

    return $this;
  }

  /**
   * Get the value of couleur
   *
   * @return  string
   */
  public function getCouleur()
  {
    return $this->couleur;
  }

  /**
   * Set the value of couleur
   *
   * @param  string  $couleur
   *
   * @return  self
   */
  public function setCouleur(string $couleur)
  {
    $this->couleur = $couleur;

    return $this;
  }

  public function __construct()
  {
  }

  private function somme(array $data): float
  {
    $somme = 0;

    for ($t = 0; $t < count($data); $t++) {
      $somme += $data[$t];
    }
    return $somme;
  }

  private function valeur(array $data): array
  {
    foreach ($data as $id => $k) {
      //echo $k.' '.$id;
      if (!is_numeric($k)) {
        $datanum[] = $k;
      } else {
        $datanum[] = floatval($k);
      }
      if (empty($datanum) && is_numeric($id) && empty($k)) {
        $datanum[] = floatval($id);
      }
      if (is_numeric($id)) {
        $datalab[] = floatval($id);
      }
    }

    return $datanum;
  }

  private function label(array $data): array
  {

    $datalab = [];
    foreach ($data as $id => $k) {

      if (!is_numeric($id)) {
        $datalab[] = $id;
      } else {
        $datalab[] = floatval($id);
      }
    }
    return $datalab;
  }

  private function pourcent(array $data): array
  {
    $value = [];
    $somme = $this->somme($data);

    for ($p = 0; $p < count($data); $p++) {

      $value[] = (float) ($data[$p] * 100) / $somme;
    }

    return $value;
  }

  private function pcouleur($Graf): array
  {
    $Color = [];
    $Couleur = [];
    $Color['Red'] = [170, 202, 10, 0, 247, 161, 186, 14, 0, 254, 15, 124, 10, 52, 238];
    $Color['Green'] = [120, 0, 0, 202, 186, 3, 121, 200, 254, 242, 125, 36, 102, 56, 146];
    $Color['Blue'] = [70, 0, 202, 0, 0, 121, 0, 206, 215, 89, 110, 89, 18, 23, 98];
    [$r, $g, $b] = explode(".", $this->couleur);
    [$fr, $fg, $fb] = explode(".", $this->fond);
    $t = 55;
    for ($c = 0; $c < count($Color['Red']); $c++) {

      if ($Color['Red'][$c] == $r && $Color['Green'][$c] == $g && $Color['Blue'][$c] == $b) {
        $Couleur[$c] = imagecolorallocate($Graf, (int)fmod($Color['Red'][$c] + $t, 255), (int)fmod($Color['Green'][$c] + $t, 255), (int)fmod($Color['Blue'][$c] + $t, 255));
      } elseif ($Color['Red'][$c] == $fr && $Color['Green'][$c] == $fg && $Color['Blue'][$c] == $fb) {
        $Couleur[$c] = imagecolorallocate($Graf, (int)fmod($Color['Red'][$c] - $t, 255), (int)fmod($Color['Green'][$c] - $t, 255), (int)fmod($Color['Blue'][$c] - $t, 255));
      } else {
        $Couleur[$c] = imagecolorallocate($Graf, $Color['Red'][$c], $Color['Green'][$c], $Color['Blue'][$c]);
      }
    }
    return $Couleur;
  }

  private function pcouleurAlfa($Graf, int $t = 55): array
  {
    $Color = [];
    $Couleur = [];
    if ($t >= 127) {
      $t = fmod($t, 127);
    }
    $Color['Red'] = [170, 202, 10, 0, 247, 161, 186, 14, 0, 254, 15, 124, 10, 52, 238];
    $Color['Green'] = [120, 0, 0, 202, 186, 3, 121, 200, 254, 242, 125, 36, 102, 56, 146];
    $Color['Blue'] = [70, 0, 202, 0, 0, 121, 0, 206, 215, 89, 110, 89, 18, 23, 98];
    [$r, $g, $b] = explode(".", $this->couleur);
    [$fr, $fg, $fb] = explode(".", $this->fond);

    for ($c = 0; $c < count($Color['Red']); $c++) {


      if ($Color['Red'][$c] == $r && $Color['Green'][$c] == $g && $Color['Blue'][$c] == $b) {
        $Couleur[$c] = imagecolorallocatealpha($Graf, (int)fmod($Color['Red'][$c] + $t, 255), (int)fmod($Color['Green'][$c] + $t, 255), (int)fmod($Color['Blue'][$c] + $t, 255), $t);
      } elseif ($Color['Red'][$c] == $fr && $Color['Green'][$c] == $fg && $Color['Blue'][$c] == $fb) {
        $Couleur[$c] = imagecolorallocatealpha($Graf, (int)fmod($Color['Red'][$c] - $t, 255), (int)fmod($Color['Green'][$c] - $t, 255), (int)fmod($Color['Blue'][$c] - $t, 255), $t);
      } else {
        $Couleur[$c] = imagecolorallocatealpha($Graf, $Color['Red'][$c], $Color['Green'][$c], $Color['Blue'][$c], $t);
      }
    }
    return $Couleur;
  }

  private function pie($Graf, $value, $Couleur)
  {
    $d = 1;
    $width = $this->width;
    $height = $this->height;
    $margex = $this->margeX;
    $margey = $this->margeY;

    $CPortion = $this->pcouleur($Graf);
    // Fond de l'image
    $Grafi = imagefilledrectangle($Graf, 0, 0, $width - $d, $height - $d, $Couleur['fond']);

    // Dessine le contour du camembert

    imagefilledellipse($Graf, (int) ($width / 2), (int) ($height / 2 + $d * 3), (int) ($width - $margex + $d * 15), (int) ($height / 1.2 - $margey + $d * 15), $Couleur['ecriture']);

    // Dessin des portions
    $start = 0;

    $colorid = 0;
    for ($v = 0; $v < (is_countable($value) ? count($value) : 0); $v++) {
      if ($colorid == count($CPortion)) {
        $colorid = 0;
      } else {
        $colorid++;
      }

      $end = (int) round($start + (($value[$v] * 360) / 100));

      imagefilledarc($Graf, (int) (($width / 2) + 2), (int) (($height / 2) + 4), (int) (($width - $margex) + $d * 8), (int) (($height / 1.2 - $margey) + $d * 10), (int) $start, (int) $end, $this->pcouleurAlfa($Graf, 55)[$colorid], IMG_ARC_PIE);
      imagefilledarc($Graf, (int) ($width / 2), (int) ($height / 2), (int) ($width - $margex) - $d - 8, (int) ($height / 1.2 - $margey) - $d - 8, (int) $start, (int) $end, $this->pcouleur($Graf)[$colorid], IMG_ARC_PIE);

      $start = $end;
    }
    $Grafi = imagecreatetruecolor($width, $height);
    // Copie de l'image Graphique temporaire
    imagecopyresized($Grafi, $Graf, 0,  0, 0, 0, $width, $height, $width, $height);
    // Libération de la mémoire
    imagedestroy($Grafi);

    return $Grafi;
  }

  private function bar($Graf, $value, $Couleur)
  {
    // Fond de l'image
    $width = $this->width;
    $height = $this->height;
    $margex = $this->margeX;
    $margey = $this->margeY;
    $d = 1;
    $CPortion = $this->pcouleur($Graf);
    $Grafi = imagefilledrectangle($Graf, 0, 0, $width - 3, $height - 3, $Couleur['fond']);
    imagesetthickness($Graf, 3);
    imageline($Graf, $width - 2, 0, $width - 2, $height,  $Couleur['ecriture']);
    imageline($Graf, 0, $height - 2, $width - 2, $height - 2,  $Couleur['ecriture']);
    //imagerectangle($Graf, 0, 0, $width-3, $height-3, $Couleur['ecriture-']);
    // Dessin des portions

    imagesetthickness($Graf, $d);
    // Dessin des portions

    $max = max($value);
    $colonne = is_countable($value) ? count($value) : 0;
    $padcolumn = 10;
    $columnheight = ($height / 100) * (($d / $colonne) * 100);
    $padbottom = 30;

    $colorid = 0;

    for ($i = 0; $i < $max; $i++) {

      $y1 = 0;
      $x1 = $i * $padbottom - $padbottom * 2;
      $y2 = $height;
      $x2 = $i * $padbottom - $padbottom * 2;
      imageline($Graf, $x1, $y1, $x2, $y2, $Couleur['ecriture-']);
    }

    for ($i = 0; $i < $colonne; $i++) {
      if ($colorid == $colonne) {
        $colorid = 0;
      } else {
        $colorid++;
      }

      $columnwidth  = ($width / 100) * (($value[$i] / $max) * 100);
      $x1 = $padcolumn;
      $y1 = $i * $columnheight + $padcolumn / 2;
      $x2 = $columnwidth - $padcolumn;
      $y2 = (($i + 1) * $columnheight) - $padbottom + $padcolumn / 2;
      imagefilledrectangle($Graf, (int)$x1 - $d, (int)$y1 - $d * 5, (int)$x2 + ($d * 5), (int)$y2 + ($d), $Couleur['ecriture']);
      imagefilledrectangle($Graf, (int)$x1 - $d, (int)$y1 - $d * 4, (int)$x2 + ($d * 4), (int)$y2 + ($d), $this->pcouleurAlfa($Graf, 55)[$colorid]);
      imagefilledrectangle($Graf, (int)$x1 - ($d), (int)$y1 + ($d), (int)$x2 - ($d), (int)$y2 - ($d), $this->pcouleur($Graf)[$colorid]);
    }
    $Grafi = imagecreatetruecolor($width, $height);
    // Copie de l'image Graphique temporaire
    imagecopyresized($Grafi, $Graf, 0,  0, 0, 0, $width, $height, $width, $height);
    // Libération de la mémoire
    imagedestroy($Grafi);
    return $Grafi;
  }

  private function col($Graf, $value, $Couleur)
  {

    $width = $this->width;
    $height = $this->height;
    $margex = $this->margeX;
    $margey = $this->margeY;

    //$CPortion=$this->pcouleur($Graf);
    // Fond de l'image
    $padcolumn = 10;

    $padbottom = 30;
    $d = 1;
    $Grafi = imagefilledrectangle($Graf, 0, 0, $width, $height, $Couleur['fond']);
    imagesetthickness($Graf, 3);
    imageline($Graf, $width - 2, 0, $width - 2, $height,  $Couleur['ecriture']);
    imageline($Graf, 0, $height - 2, $width - 2, $height - 2,  $Couleur['ecriture']);
    //imagerectangle($Graf, 0, 0, $width-3, $height-3, $Couleur['ecriture-']);
    // Dessin des portions

    imagesetthickness($Graf, $d);
    $max = max($value);
    $colonne = is_countable($value) ? count($value) : 0;
    $columnwidth = ($width / 100) * (($d / $colonne) * 100);

    $colorid = 0;

    for ($i = 0; $i < $max; $i++) {

      $x1 = 0;
      $y1 = $i * $padbottom - $padbottom * 2;
      $x2 = $width;
      $y2 = $i * $padbottom - $padbottom * 2;
      imageline($Graf, $x1, $y1, $x2, $y2, $Couleur['ecriture-']);
    }

    for ($i = 0; $i < $colonne; $i++) {
      if ($colorid == $colonne) {
        $colorid = 0;
      } else {
        $colorid++;
      }


      $columnheight = ($height / 100) * (($value[$i] / $max) * 100);
      $x1 = $i * $columnwidth + $padcolumn / 2;
      $y1 = ($height) - $columnheight + $padcolumn;
      $x2 = (($i + 1) * $columnwidth) - $padbottom / 2;
      $y2 = $height - $padcolumn * 1.5;

      imagefilledrectangle($Graf, (int)$x1 - $d, (int)$y1 - $d * 5, (int)$x2 + ($d * 5), (int)$y2 + ($d), $Couleur['ecriture']);
      imagefilledrectangle($Graf, (int)$x1 - $d, (int)$y1 - $d * 4, (int)$x2 + ($d * 4), (int)$y2 + ($d), $this->pcouleurAlfa($Graf, 55)[$colorid]);
      imagefilledrectangle($Graf, (int)$x1 - ($d), (int)$y1 + ($d), (int)$x2 - ($d), (int)$y2 - ($d), $this->pcouleur($Graf)[$colorid]);
    }
    $Grafi = imagecreatetruecolor($width, $height);
    // Copie de l'image Graphique temporaire
    imagecopyresized($Grafi, $Graf, 0,  0, 0, 0, $width, $height, $width, $height);
    // Libération de la mémoire
    imagedestroy($Grafi);
    return $Grafi;
  }

  private function lengend(array $datalab, array $value, $Graf, $Couleur, $Font)
  {
    // Creation de la ressource
    $width = $this->width;
    $height = $this->height;
    $margex = $this->margeX;
    $margey = $this->margeY;
    $widthlegend = $this->widthLegend;
    $title = $this->title;
    $legend = imagecreatetruecolor($widthlegend, $height);

    // Couleur du fond
    imagefilledrectangle($legend, 0, 0, $widthlegend, $height, $Couleur['fond']);

    // Place une marge en haut
    $yActual = intval($margey * 1.5);

    // Si on a un titre
    if (!empty($title) || $title != 'graph') {
      // Taille maxi du titre
      $FontSize = 18;
      $GoodSize = false;

      // Tant que le titre ne rentre pas
      while (!$GoodSize) {
        // Calcul de la largeur du titre
        $TitleBox = imagettfbbox($FontSize, 0, $Font['fontotf'], $title);
        $TitleWidth = $TitleBox[0] + $TitleBox[2];
        $TitleHeight = $TitleBox[1] + $TitleBox[3];

        // Si le titre rentre dans la boite
        if ($TitleWidth <= ($widthlegend - 20)) {
          $GoodSize = true;
        } else {
          // Sinon on reduit la taille de la police
          $FontSize--;
        }
      }

      // Centrage du titre
      $xActual = ($widthlegend - $TitleWidth) / 2;

      imagettftext($legend, (int)$FontSize, 0, (int)$xActual, (int)$yActual, (int)$Couleur['ecriture'], $Font['fontotf'], $title);

      // Saut de ligne sous le titre
      $yActual += 20;
    }

    $Blocheight = 20;
    $Blocsaut = 10;
    $GoodBlocHeight = false;

    $maxheight = $height - $yActual - $margey;
    while (!$GoodBlocHeight) {
      $TotalHeight = ($Blocheight + $Blocsaut) * count($datalab);
      if ($TotalHeight > $maxheight) {
        $Blocheight--;
        $Blocsaut--;
      } else {
        $GoodBlocHeight = true;
      }
    }

    // Dessin et texte des legendes
    for ($k = 0; $k < count($datalab); $k++) {


      if ($this->type == 'col' || $this->type == 'bar') {
        imagefilledrectangle($legend, 20, $yActual - 4, 50 + 4, $yActual + $Blocheight, $Couleur['ecriture']);
        imagefilledrectangle($legend, 20, $yActual - 3, 50 + 3, $yActual + $Blocheight, $this->pcouleurAlfa($Graf, 55)[$k + 1]);
        imagefilledrectangle($legend, 20 + 1, $yActual, 50, $yActual + $Blocheight - 1, $this->pcouleur($Graf)[$k + 1]);
      }

      if ($this->type == 'pie') {
        imagefilledarc($legend, 5 + $Blocheight - 1, 5 + $yActual - 1, 50 + 10, 50 + 10, 0, (360 / 6), $Couleur['ecriture'], IMG_ARC_PIE);
        imagefilledarc($legend, 5 + $Blocheight + 3, 5 + $yActual, 50, 50, 0, (360 / 6), $this->pcouleurAlfa($Graf, 55)[$k + 1], IMG_ARC_PIE);
        imagefilledarc($legend, 5 + $Blocheight + 1, 5 + $yActual, 50 - 2, 50 - 2, 0, (360 / 6), $this->pcouleur($Graf)[$k + 1], IMG_ARC_PIE);
      }

      if ($this->legendVal) {
        if ($this->autodVal) {
          $legendvaleur = $datalab[$k] . ' ' . round($value[$k], 2) . '%';
        } else {
          $legendvaleur = $datalab[$k] . ' ' . round($value[$k], 2) . ' ';
        }
      } else {
        $legendvaleur = $datalab[$k];
      }

      $LegendFontSize = 13;
      $LegendGoodSize = false;

      // Tant que la legende ne rentre pas
      while (!$LegendGoodSize) {
        // Calcul de la largeur du titre
        $LegendBox = imagettfbbox($LegendFontSize, 0, $Font['fontttf'], $legendvaleur);
        $LegendWidth = $LegendBox[0] + $LegendBox[2];
        $LegendHeight = $LegendBox[1] + $LegendBox[3];

        // Si le titre rentre dans la boite
        if ($LegendWidth <= ($widthlegend - 60)) {
          $LegendGoodSize = true;
        } else {
          // Sinon on reduit la taille de la police
          $LegendFontSize--;
        }
      }

      imagettftext($legend, $LegendFontSize, 0, 60, $yActual + $Blocheight, $Couleur['ecriture'], $Font['fontttf'], $legendvaleur);

      $yActual += $Blocheight + $Blocsaut;
    }

    // Creation de l'image Graphique + Legende
    $GrafTotal = imagecreatetruecolor($width + $widthlegend, $height);
    // Copie de l'image Graphique temporaire
    imagecopyresized($GrafTotal, $Graf, 0,  0, 0, 0, $width, $height, $width, $height);
    // Libération de la mémoire
    imagedestroy($Graf);
    // Copie de l'image Legende temporaire
    imagecopyresized($GrafTotal, $legend, $width, 0, 0, 0, $widthlegend, $height, $widthlegend, $height);
    // Libération de la mémoire
    imagedestroy($legend);

    return $GrafTotal;
  }

  private function couleurs(string $couleur, $Graf): array
  {
    $Couleur = [];
    [$r, $g, $b] = explode(".", $couleur);
    $r = (int)$r;
    $g = (int)$g;
    $b = (int)$b;

    if ($r > 255) {
      $r = fmod((int)$r, 255);
    }

    if ($g > 255) {
      $g = fmod((int)$g, 255);
    }

    if ($b > 255) {
      $b = fmod((int)$b, 255);
    }
    $r2 = $r + 55;
    if ($r2 > 255) {
      $r2 = fmod($r2, 255);
    }

    $g2 = $g + 55;
    if ($g2 > 255) {
      $g2 = fmod($g2, 255);
    }
    $b2 = $b + 55;
    if ($b2 > 255) {
      $b2 = fmod($b2, 255);
    }

    $r3 = $r + 255;
    if ($r3 > 255) {
      $r3 = fmod($r3, 255);
      if ($r3 == $r) {
        $r3 = fmod($r3 + 100, 255);
      }
    }
    $g3 = $g + 255;
    if ($g3 > 255) {
      $g3 = fmod($g3, 255);
      if ($g3 == $g) {
        $g3 = fmod($g3 + 100, 255);
      }
    }
    $b3 = $b + 255;
    if ($b3 > 255) {
      $b3 = fmod($b3, 255);
      if ($b3 == $b) {
        $b3 = fmod($b3 + 100, 255);
      }
    }
    $this->fond = '' . $r3 . '.' . $g . '.' . $b . '';
    $Couleur['ecriture'] = imagecolorallocate($Graf, (int) $r, (int) $g, (int) $b);
    $Couleur['ecriture-'] = imagecolorallocatealpha($Graf, (int) $r2, (int) $g2, (int) $b2, 55);
    $Couleur['fond'] = imagecolorallocate($Graf, (int) $r3, (int) $g3, (int) $b3);

    return $Couleur;
  }

  public function Rz()
  {
    $this->autodVal = true;
    $this->sav = false;
    $this->legend = true;
    $this->legendVal = true;
    return $this;
  }

  private function CreatImage($Grafi, $image)
  {
    switch ($this->nime) {
      case 'jpg':
      case 'jpeg': // Pour les jpg et jpeg
        if ($this->sav == true) {
          imagejpeg($Grafi, $this->chemin . '/' . $image . '.' . $this->nime);
        } else {
          imagejpeg($Grafi);
        }
        break;

      case 'png': // Pour les png
        if ($this->sav == true) {
          imagepng($Grafi, $this->chemin . '/' . $image . '.' . $this->nime);
        } else {
          imagepng($Grafi);
        }
        break;

      case 'gif': // Pour les gif
        if ($this->sav == true) {
          imagegif($Grafi, $this->chemin . '/' . $image . '.' . $this->nime);
        } else {
          imagegif($Grafi);
        }
        break;
      case 'webp': // Pour les webp
        if ($this->sav == true) {
          imagewebp($Grafi, $this->chemin . '/' . $image . '.' . $this->nime);
        } else {
          imagewebp($Grafi);
        }

        break;
    }
    // Libération de la mémoire
    imagedestroy($Grafi);
  }

  public function Graph(string $type, array $data, string $title)
  {

    $Font = [];
    $this->setType($type);
    if (!empty($title)) {
      $this->title = $title;
    } else {
      $this->title = '';
    }

    if (!empty($this->ordre)) {
      if ($this->ordre == "c") {
        asort($data);
      }
      if ($this->ordre == "d") {
        arsort($data);
      }
    }


    $datalab = $this->label($data);
    $datanum = $this->valeur($data);

    $somme = $this->somme($datanum);

    if ($this->height <= ($this->width / 1.5)) {
      $this->height = (intval(($this->height) * 1.5));
    }

    $width = $this->width;

    $height = $this->height;

    $chemin = $this->chemin;
    $nime = $this->nime;

    $title = $this->title;
    $title = str_replace(' ', '-', $title);
    $image = nl2br(htmlspecialchars(trim($title)));
    // Si $autoVal est vrai, calcul du pourcentage automatique
    if ($this->autodVal == true) {

      $value = $this->pourcent($datanum);
    } else {

      $value = $datanum;
    }


    if (!isset($this->sav)) {

      // $this->sav=1;
      if (!is_dir($chemin)) {
        mkdir($chemin, 0777, true);
      }
    }
    // Creation de la ressource
    $Graf = imagecreatetruecolor($width, $height);
    imagealphablending($Graf, true);
    ImagesaveAlpha($Graf, true);
    // Definition des polices
    // Dans le cas présent les fichier TTF sont situé dans un dossier fonts
    // pour le title
    $Font['fontotf'] = realpath('fonts/Arial.otf');
    // pour legend
    $Font['fontttf'] = realpath('fonts/garamond.ttf');

    if (!file_exists($Font['fontotf'])) {
      print 'vérifier présence de <"fonts/Arial.otf"> ';
      exit;
    }
    if (!file_exists($Font['fontttf'])) {
      print 'vérifier présence de <"fonts/garamond.ttf"> ';
      exit;
    }

    // Definition des couleurs principales
    $Couleur = $this->couleurs($this->couleur, $Graf);
    imagefill($Graf, 0, 0, $Couleur['ecriture']);


    switch ($this->type) {
      case "pie":
        $Grafi = $this->pie($Graf, $value, $Couleur);
        break;
      case "col":
        $Grafi = $this->col($Graf, $value, $Couleur);
        break;
      case "bar":
        $Grafi = $this->bar($Graf, $value, $Couleur);
        break;
      default:
        $Grafi = $this->col($Graf, $value, $Couleur);
        break;
    }

    // Si on choisi d'afficher la legende


    if ($this->legend) {

      $Grafi = $this->lengend($datalab, $value, $Graf, $Couleur, $Font);
      ImageSaveAlpha($Grafi, true);
    }

    if ($this->sav == true) {

      // Envoi de l'image au navigateur
      $this->CreatImage($Grafi, $image);

      print '<picture><img 
      srcset="' . $this->chemin . '/' . $image . '.' . $this->nime . '" type="image/' . $this->nime . '"
      src="' . $this->chemin . '/' . $image . '.' . $this->nime . '" alt="' . $image . '" /></picture>';
    } else {
      ob_start();
      // Envoi de l'image au navigateur

      $this->CreatImage($Grafi, $image);
      $img = base64_encode(ob_get_clean());
      printf('<picture><img src="data:image/%s;base64,%s"/><picture>', $this->nime, $img);
    }
    if (!isset($Graf)) {
      imagedestroy($Graf);
    }
  }
}
