<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_02fc7cad9061a451d049fd8182cf2946428bc9bfc9b3984ae1c601b8fcaf14e6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main_content' => [$this, 'block_main_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error404.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error404.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "@Twig/Exception/error404.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_content"));

        // line 11
        echo "    <div id=\"frame\"></div>
    
    <script>
        var myGamePiece;
        var myScore;
        var myMobs = [];
        var myBullets = [];
        var LEFT, UP, RIGHT, DOWN;

        function startGame() {  
            myGameArea.start();
            myScore = new component(\"30px\", \"Consolas\", \"black\", 280, 40, \"text\");
            myGamePiece = new component(38, 48, '";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/character/2_side.png"), "html", null, true);
        echo "', (myGameArea.canvas.width / 2), (myGameArea.canvas.height / 2), \"image\");
        }
  
        var myGameArea = {
            canvas : document.createElement(\"canvas\"),
            start : function() {
                wall = document.createElement(\"div\");
                wall.id = \"wall\";
                document.querySelector(\"#frame\").appendChild(wall);
                door = document.createElement(\"div\");
                door.id = \"door\";
                wall.appendChild(door);
                this.context = this.canvas.getContext(\"2d\");
                this.canvas.width = 1160;
                this.canvas.height = 740;
                document.querySelector(\"#frame\").appendChild(myGameArea.canvas);
                this.frameNo = 0;
                this.interval = setInterval(updateGameArea, 20);
                deskImg = document.createElement(\"img\");
                deskImg.id = \"deskImg\";
                deskImg.src = '";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/environment/desk.png"), "html", null, true);
        echo "';
                document.querySelector(\"#frame\").appendChild(deskImg);
            },
            clear : function() {
                this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
            },
            stop : function() {
                clearInterval(this.interval);
            }
            
        }

        function everyInterval(n){
            if ((myGameArea.frameNo / n) % 1 == 0) { return true; }
            return false;
        }

        function component(width, height, color, x, y, type) {
            this.type = type;
            this.bulletDirection = null;
            this.lastDirection = null;
            if (type == \"image\") {
                this.image = new Image();
                this.image.src = color;
            }
            this.width = width;
            this.height = height;
            this.x = x;
            this.y = y;
            this.speed = 3;
            this.update = function(){
                ctx = myGameArea.context;
                if (this.type == \"text\") {
                    ctx.font = this.width + \" \" + this.height;
                    ctx.fillStyle = color;
                    ctx.fillText(this.text, this.x, this.y);
                } else if (type == \"image\") {
                    ctx.drawImage(this.image,
                        this.x,
                        this.y,
                        this.width, this.height);
                } else {
                    ctx.fillStyle = color;
                    ctx.fillRect(this.x, this.y, this.width, this.height);
                }
            },
            this.newPos = function() {
                var x;
                if (LEFT) {
                    x = this.x - this.speed;
                    if( x > 0)
                        this.x -= this.speed;
                        this.lastDirection = \"LEFT\";
                };
                if (RIGHT){
                    x = this.x + this.speed + this.width;
                    if( x < myGameArea.canvas.width) 
                        this.x += this.speed;
                        this.lastDirection = \"RIGHT\";
                };
                if (UP){
                    x = this.y - this.speed;
                    if ( x > 0 )
                        this.y -= this.speed;
                        this.lastDirection = \"UP\";
                };
                if (DOWN){
                    x = this.y + this.speed + myGamePiece.height;
                    if( x < myGameArea.canvas.height )
                        this.y += this.speed;
                        this.lastDirection = \"DOWN\";
                };

            },
            this.crashWith = function(otherobj) {
                var myleft = this.x;
                var myright = this.x + (this.width);
                var mytop = this.y;
                var mybottom = this.y + (this.height);
                var otherleft = otherobj.x;
                var otherright = otherobj.x + (otherobj.width);
                var othertop = otherobj.y;
                var otherbottom = otherobj.y + (otherobj.height);
                var crash = true;
                if ((mybottom < othertop) ||
                (mytop > otherbottom) ||
                (myright < otherleft) ||
                (myleft > otherright)) {
                    crash = false;
                }
                return crash;
            }
        }

        function updateGameArea() {
            for (i = 0; i < myMobs.length; i += 1) {
                if (myGamePiece.crashWith(myMobs[i])) {
                    myGameArea.stop();
                    return;
                }
                for (j = 0 ; j < myBullets.length; j += 1) {
                    if(myMobs[i].crashWith(myBullets[j])){
                        myMobs.splice( i, 1 );
                        myBullets.splice( j, 1 );
                        myGameArea.frameNo += 20;
                    };
                }
            }
            myGameArea.clear();
            myGameArea.frameNo += 1;
            updateMobs();
            myScore.text = \"SCORE: \" + myGameArea.frameNo;
            myScore.update();
            myGamePiece.newPos();
            myGamePiece.update();
            updateBullets();
        }

        function updateBullets(){
            var bulletSpeed = 10;
            if( myGameArea.frameNo == 1 || everyInterval(25) ){
                var bullet = new component(7, 7, \"green\", myGamePiece.x+25, myGamePiece.y+25);
                bullet.bulletDirection = myGamePiece.lastDirection;
                myBullets.push(bullet);
            }

            for( i = 0; i < myBullets.length; i += 1 ){
                if (myBullets[i].bulletDirection == null){
                    if(LEFT)
                        myBullets[i].bulletDirection = \"LEFT\";
                        myBullets[i].x -= bulletSpeed;
                    if(UP)
                        myBullets[i].bulletDirection = \"UP\";
                        myBullets[i].y -= bulletSpeed;
                    if(RIGHT)
                        myBullets[i].bulletDirection = \"RIGHT\";
                        myBullets[i].x += bulletSpeed;
                    if(DOWN)
                        myBullets[i].bulletDirection = \"DOWN\";
                        myBullets[i].y += bulletSpeed;
                }else{
                    if(myBullets[i].bulletDirection == \"LEFT\")
                        myBullets[i].x -= bulletSpeed;
                    if(myBullets[i].bulletDirection == \"UP\")
                        myBullets[i].y -= bulletSpeed;
                    if(myBullets[i].bulletDirection == \"RIGHT\")
                        myBullets[i].x += bulletSpeed;
                    if(myBullets[i].bulletDirection == \"DOWN\")
                        myBullets[i].y += bulletSpeed;
                }
                myBullets[i].update();
            }
        }

        function updateMobs(){
            var x, y, distPlayerX, distPlayerY, distPlayer;
            if (myGameArea.frameNo == 1 || everyInterval(150)) {
                do{
                    x = Math.floor(Math.random() * (myGameArea.canvas.width - 20)) + 1;
                    y = Math.floor(Math.random() * (myGameArea.canvas.height - 20)) + 1;
                    distPlayerX = x - myGamePiece.x;
                    distPlayerY = y - myGamePiece.y;
                    distPlayer = Math.sqrt(distPlayerX * distPlayerX + distPlayerY * distPlayerY);
                }while(distPlayer < 100);
                
                myMobs.push(new component(40, 40, \"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/character/ghost.png"), "html", null, true);
        echo "\", x, y, \"image\"));
            }

            for (i = 0; i < myMobs.length; i += 1) {
                var toPlayerX = myGamePiece.x - myMobs[i].x;
                var toPlayerY = myGamePiece.y - myMobs[i].y;

                toPlayerLength = Math.sqrt(toPlayerX * toPlayerX + toPlayerY * toPlayerY);
                toPlayerX = toPlayerX / toPlayerLength;
                toPlayerY = toPlayerY / toPlayerLength;

                myMobs[i].x += toPlayerX;
                myMobs[i].y += toPlayerY;
                myMobs[i].update();
            }
        }

        document.onkeydown = function(e){
            if(e.keyCode == 37) {
                myGamePiece.image.src = '";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/character/2_side_left.png"), "html", null, true);
        echo "';
                LEFT = true;
            }
            if(e.keyCode == 39) {
                myGamePiece.image.src = '";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/character/2_side.png"), "html", null, true);
        echo "';
                RIGHT = true;
            }
            if(e.keyCode == 38) {
                myGamePiece.image.src = '";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/character/2_north.png"), "html", null, true);
        echo "';
                UP = true;
            }
            if(e.keyCode == 40) {
                myGamePiece.image.src = '";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/character/2_south.png"), "html", null, true);
        echo "';
                DOWN = true;
            }
        }

        document.onkeyup = function(e){
            if(e.keyCode == 37) LEFT = false;
            if(e.keyCode == 39) RIGHT = false;
            if(e.keyCode == 38) UP = false;
            if(e.keyCode == 40) DOWN = false;
        }

        startGame();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 239,  309 => 235,  302 => 231,  295 => 227,  273 => 208,  105 => 43,  82 => 23,  68 => 11,  58 => 10,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/bundles/TwigBundle/Exception/error404.html.twig #}
{% extends 'layout.html.twig' %}

{# {% block menu %}
    {% include \"_menu.html.twig\" with {
        'active': 'home'
    } %}
{% endblock %} #}

{% block main_content %}
    <div id=\"frame\"></div>
    
    <script>
        var myGamePiece;
        var myScore;
        var myMobs = [];
        var myBullets = [];
        var LEFT, UP, RIGHT, DOWN;

        function startGame() {  
            myGameArea.start();
            myScore = new component(\"30px\", \"Consolas\", \"black\", 280, 40, \"text\");
            myGamePiece = new component(38, 48, '{{ asset(\"build/images/character/2_side.png\")}}', (myGameArea.canvas.width / 2), (myGameArea.canvas.height / 2), \"image\");
        }
  
        var myGameArea = {
            canvas : document.createElement(\"canvas\"),
            start : function() {
                wall = document.createElement(\"div\");
                wall.id = \"wall\";
                document.querySelector(\"#frame\").appendChild(wall);
                door = document.createElement(\"div\");
                door.id = \"door\";
                wall.appendChild(door);
                this.context = this.canvas.getContext(\"2d\");
                this.canvas.width = 1160;
                this.canvas.height = 740;
                document.querySelector(\"#frame\").appendChild(myGameArea.canvas);
                this.frameNo = 0;
                this.interval = setInterval(updateGameArea, 20);
                deskImg = document.createElement(\"img\");
                deskImg.id = \"deskImg\";
                deskImg.src = '{{ asset(\"build/images/environment/desk.png\")}}';
                document.querySelector(\"#frame\").appendChild(deskImg);
            },
            clear : function() {
                this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
            },
            stop : function() {
                clearInterval(this.interval);
            }
            
        }

        function everyInterval(n){
            if ((myGameArea.frameNo / n) % 1 == 0) { return true; }
            return false;
        }

        function component(width, height, color, x, y, type) {
            this.type = type;
            this.bulletDirection = null;
            this.lastDirection = null;
            if (type == \"image\") {
                this.image = new Image();
                this.image.src = color;
            }
            this.width = width;
            this.height = height;
            this.x = x;
            this.y = y;
            this.speed = 3;
            this.update = function(){
                ctx = myGameArea.context;
                if (this.type == \"text\") {
                    ctx.font = this.width + \" \" + this.height;
                    ctx.fillStyle = color;
                    ctx.fillText(this.text, this.x, this.y);
                } else if (type == \"image\") {
                    ctx.drawImage(this.image,
                        this.x,
                        this.y,
                        this.width, this.height);
                } else {
                    ctx.fillStyle = color;
                    ctx.fillRect(this.x, this.y, this.width, this.height);
                }
            },
            this.newPos = function() {
                var x;
                if (LEFT) {
                    x = this.x - this.speed;
                    if( x > 0)
                        this.x -= this.speed;
                        this.lastDirection = \"LEFT\";
                };
                if (RIGHT){
                    x = this.x + this.speed + this.width;
                    if( x < myGameArea.canvas.width) 
                        this.x += this.speed;
                        this.lastDirection = \"RIGHT\";
                };
                if (UP){
                    x = this.y - this.speed;
                    if ( x > 0 )
                        this.y -= this.speed;
                        this.lastDirection = \"UP\";
                };
                if (DOWN){
                    x = this.y + this.speed + myGamePiece.height;
                    if( x < myGameArea.canvas.height )
                        this.y += this.speed;
                        this.lastDirection = \"DOWN\";
                };

            },
            this.crashWith = function(otherobj) {
                var myleft = this.x;
                var myright = this.x + (this.width);
                var mytop = this.y;
                var mybottom = this.y + (this.height);
                var otherleft = otherobj.x;
                var otherright = otherobj.x + (otherobj.width);
                var othertop = otherobj.y;
                var otherbottom = otherobj.y + (otherobj.height);
                var crash = true;
                if ((mybottom < othertop) ||
                (mytop > otherbottom) ||
                (myright < otherleft) ||
                (myleft > otherright)) {
                    crash = false;
                }
                return crash;
            }
        }

        function updateGameArea() {
            for (i = 0; i < myMobs.length; i += 1) {
                if (myGamePiece.crashWith(myMobs[i])) {
                    myGameArea.stop();
                    return;
                }
                for (j = 0 ; j < myBullets.length; j += 1) {
                    if(myMobs[i].crashWith(myBullets[j])){
                        myMobs.splice( i, 1 );
                        myBullets.splice( j, 1 );
                        myGameArea.frameNo += 20;
                    };
                }
            }
            myGameArea.clear();
            myGameArea.frameNo += 1;
            updateMobs();
            myScore.text = \"SCORE: \" + myGameArea.frameNo;
            myScore.update();
            myGamePiece.newPos();
            myGamePiece.update();
            updateBullets();
        }

        function updateBullets(){
            var bulletSpeed = 10;
            if( myGameArea.frameNo == 1 || everyInterval(25) ){
                var bullet = new component(7, 7, \"green\", myGamePiece.x+25, myGamePiece.y+25);
                bullet.bulletDirection = myGamePiece.lastDirection;
                myBullets.push(bullet);
            }

            for( i = 0; i < myBullets.length; i += 1 ){
                if (myBullets[i].bulletDirection == null){
                    if(LEFT)
                        myBullets[i].bulletDirection = \"LEFT\";
                        myBullets[i].x -= bulletSpeed;
                    if(UP)
                        myBullets[i].bulletDirection = \"UP\";
                        myBullets[i].y -= bulletSpeed;
                    if(RIGHT)
                        myBullets[i].bulletDirection = \"RIGHT\";
                        myBullets[i].x += bulletSpeed;
                    if(DOWN)
                        myBullets[i].bulletDirection = \"DOWN\";
                        myBullets[i].y += bulletSpeed;
                }else{
                    if(myBullets[i].bulletDirection == \"LEFT\")
                        myBullets[i].x -= bulletSpeed;
                    if(myBullets[i].bulletDirection == \"UP\")
                        myBullets[i].y -= bulletSpeed;
                    if(myBullets[i].bulletDirection == \"RIGHT\")
                        myBullets[i].x += bulletSpeed;
                    if(myBullets[i].bulletDirection == \"DOWN\")
                        myBullets[i].y += bulletSpeed;
                }
                myBullets[i].update();
            }
        }

        function updateMobs(){
            var x, y, distPlayerX, distPlayerY, distPlayer;
            if (myGameArea.frameNo == 1 || everyInterval(150)) {
                do{
                    x = Math.floor(Math.random() * (myGameArea.canvas.width - 20)) + 1;
                    y = Math.floor(Math.random() * (myGameArea.canvas.height - 20)) + 1;
                    distPlayerX = x - myGamePiece.x;
                    distPlayerY = y - myGamePiece.y;
                    distPlayer = Math.sqrt(distPlayerX * distPlayerX + distPlayerY * distPlayerY);
                }while(distPlayer < 100);
                
                myMobs.push(new component(40, 40, \"{{ asset('build/images/character/ghost.png')}}\", x, y, \"image\"));
            }

            for (i = 0; i < myMobs.length; i += 1) {
                var toPlayerX = myGamePiece.x - myMobs[i].x;
                var toPlayerY = myGamePiece.y - myMobs[i].y;

                toPlayerLength = Math.sqrt(toPlayerX * toPlayerX + toPlayerY * toPlayerY);
                toPlayerX = toPlayerX / toPlayerLength;
                toPlayerY = toPlayerY / toPlayerLength;

                myMobs[i].x += toPlayerX;
                myMobs[i].y += toPlayerY;
                myMobs[i].update();
            }
        }

        document.onkeydown = function(e){
            if(e.keyCode == 37) {
                myGamePiece.image.src = '{{ asset(\"build/images/character/2_side_left.png\")}}';
                LEFT = true;
            }
            if(e.keyCode == 39) {
                myGamePiece.image.src = '{{ asset(\"build/images/character/2_side.png\")}}';
                RIGHT = true;
            }
            if(e.keyCode == 38) {
                myGamePiece.image.src = '{{ asset(\"build/images/character/2_north.png\")}}';
                UP = true;
            }
            if(e.keyCode == 40) {
                myGamePiece.image.src = '{{ asset(\"build/images/character/2_south.png\")}}';
                DOWN = true;
            }
        }

        document.onkeyup = function(e){
            if(e.keyCode == 37) LEFT = false;
            if(e.keyCode == 39) RIGHT = false;
            if(e.keyCode == 38) UP = false;
            if(e.keyCode == 40) DOWN = false;
        }

        startGame();
    </script>
{% endblock %}", "@Twig/Exception/error404.html.twig", "/root/docker/pingouin-du-web/apps/my-symfony-app/templates/bundles/TwigBundle/Exception/error404.html.twig");
    }
}
