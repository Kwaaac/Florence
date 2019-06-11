<?php
include("../connectionFiles/connectionLOG.inc.php");
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="style.css">
  <title>Florence | Upload</title>
</head>
<body id="ajout">
  <?php include('HeadAndFoot/headerStg1.php'); ?>

  <div class="ajout">
    <?php echo "<h2 class=\"h2 text-center\">".$_SESSION['dossier-attacher']."</h2><br />"; ?>
    <form method="post" action="reception.php" enctype="multipart/form-data" class="col">
      <input type="hidden" name="MAX_FILE_SIZE" value="52428800‬" />
      <label class="col-form-label" for="mon_fichier">Icône du fichier (JPG, PNG, GIF | max. 50Mo) :</label><br />
      <div class="form-group">
        <div class="fileupload fileupload-new" data-provides="fileupload">
          <span class="btn btn-primary btn-file"><span class="fileupload-new">Select file</span>
          <span class="fileupload-exists">Change</span><input type="file" name="mon_fichier" id="mon_fichier" /></span>
          <span class="fileupload-preview"></span>
          <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
        </div>
        <label class="col-form-label" for="titre">Titre du fichier (max. 50 caractères) :</label><br />
        <input type="text" class="form-inline" name="titre" value="Titre du fichier" id="titre" /><br />
        <label class="col-form-label" for="description">Description de votre fichier (max. 255 caractères) :</label><br />
        <textarea name="description" class="form-control" style="width: 70%" id="description"></textarea><br />
        <input type="submit" class="btn btn-primary" name="submit" value="Envoyer" />
        <input type="reset"  class="btn btn-secondary" onclick="javascript:if(confirm('Votre formulaire va être réinisialiser \nêtes vous êtes sûr ?'));" value="réinitialiser">
        <a href="index.php" > <input type="button" class="btn btn-secondary" value="Retour au menu"> </a>
      </form>
    </div>
  </div>
    <?php include('HeadAndFoot/footerStg1.php'); ?>
  </body>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script type="text/javascript">
  !function (e) {
    var t = function (t, n) {
      this.$element = e(t), this.type = this.$element.data("uploadtype") || (this.$element.find(".thumbnail").length > 0 ? "image" : "file"), this.$input = this.$element.find(":file");
      if (this.$input.length === 0) return;
      this.name = this.$input.attr("name") || n.name, this.$hidden = this.$element.find('input[type=hidden][name="' + this.name + '"]'), this.$hidden.length === 0 && (this.$hidden = e('<input type="hidden" />'), this.$element.prepend(this.$hidden)), this.$preview = this.$element.find(".fileupload-preview");
      var r = this.$preview.css("height");
      this.$preview.css("display") != "inline" && r != "0px" && r != "none" && this.$preview.css("line-height", r), this.original = {
        exists: this.$element.hasClass("fileupload-exists"),
        preview: this.$preview.html(),
        hiddenVal: this.$hidden.val()
      }, this.$remove = this.$element.find('[data-dismiss="fileupload"]'), this.$element.find('[data-trigger="fileupload"]').on("click.fileupload", e.proxy(this.trigger, this)), this.listen()
    };
    t.prototype = {
      listen: function () {
        this.$input.on("change.fileupload", e.proxy(this.change, this)), e(this.$input[0].form).on("reset.fileupload", e.proxy(this.reset, this)), this.$remove && this.$remove.on("click.fileupload", e.proxy(this.clear, this))
      }, change: function (e, t) {
        if (t === "clear") return;
        var n = e.target.files !== undefined ? e.target.files[0] : e.target.value ? {name: e.target.value.replace(/^.+\\/, "")} : null;
        if (!n) {
          this.clear();
          return
        }
        this.$hidden.val(""), this.$hidden.attr("name", ""), this.$input.attr("name", this.name);
        if (this.type === "image" && this.$preview.length > 0 && (typeof n.type != "undefined" ? n.type.match("image.*") : n.name.match(/\.(gif|png|jpe?g)$/i)) && typeof FileReader != "undefined") {
          var r = new FileReader, i = this.$preview, s = this.$element;
          r.onload = function (e) {
            i.html('<img src="' + e.target.result + '" ' + (i.css("max-height") != "none" ? 'style="max-height: ' + i.css("max-height") + ';"' : "") + " />"), s.addClass("fileupload-exists").removeClass("fileupload-new")
          }, r.readAsDataURL(n)
        } else this.$preview.text(n.name), this.$element.addClass("fileupload-exists").removeClass("fileupload-new")
      }, clear: function (e) {
        this.$hidden.val(""), this.$hidden.attr("name", this.name), this.$input.attr("name", "");
        if (navigator.userAgent.match(/msie/i)) {
          var t = this.$input.clone(!0);
          this.$input.after(t), this.$input.remove(), this.$input = t
        } else this.$input.val("");
        this.$preview.html(""), this.$element.addClass("fileupload-new").removeClass("fileupload-exists"), e && (this.$input.trigger("change", ["clear"]), e.preventDefault())
      }, reset: function (e) {
        this.clear(), this.$hidden.val(this.original.hiddenVal), this.$preview.html(this.original.preview), this.original.exists ? this.$element.addClass("fileupload-exists").removeClass("fileupload-new") : this.$element.addClass("fileupload-new").removeClass("fileupload-exists")
      }, trigger: function (e) {
        this.$input.trigger("click"), e.preventDefault()
      }
    }, e.fn.fileupload = function (n) {
      return this.each(function () {
        var r = e(this), i = r.data("fileupload");
        i || r.data("fileupload", i = new t(this, n)), typeof n == "string" && i[n]()
      })
    }, e.fn.fileupload.Constructor = t, e(document).on("click.fileupload.data-api", '[data-provides="fileupload"]', function (t) {
      var n = e(this);
      if (n.data("fileupload")) return;
      n.fileupload(n.data());
      var r = e(t.target).closest('[data-dismiss="fileupload"],[data-trigger="fileupload"]');
      r.length > 0 && (r.trigger("click.fileupload"), t.preventDefault())
    })
  }(window.jQuery)
  </script>



  </html>
