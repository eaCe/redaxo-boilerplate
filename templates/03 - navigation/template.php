<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="row main-nav-bar">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html"><img src="files/logo.png" alt=""></a>
                </div>

                <ul class="nav navbar-nav navbar-right animate-link-underlines">
                    <?php
                    $PATH = explode("|", $this->getValue("path") . $this->getValue("article_id") . "|");

                    foreach (rex_category::getRootCategories() as $rootLevel)
                    {
                        $sliceStatus = $rootLevel->getValue("status");

                        if ($sliceStatus)
                        {
                            if ($rootLevel->getId() == $PATH[1])
                            {
                                echo '<li class="active"><a href="' . $rootLevel->getUrl() . '"><span><span class="link">' . $rootLevel->getName() . '</span></span></a>';
                            }
                            else
                            {
                                echo '<li><a href="' . $rootLevel->getUrl() . '"><span><span class="link">' . $rootLevel->getName() . '</span></span></a>';
                            }
                        }
                        echo '</li>';
                    }
                    ?>
                </ul>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</nav>