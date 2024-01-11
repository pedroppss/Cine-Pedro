<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>DataTables - General | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <?php include '../../admin/assets/config/css.php'; ?>
</head>
<body class="nk-body bg-white npc-default has-aside ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
            <?php include '../../admin/assets/templates/header.php'; ?>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                        <?php include '../../admin/assets/templates/aside.php'; ?><!-- .nk-aside -->
                           <!-- .nk-aside -->
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="components-preview wide-md mx-auto">
                                        <div class="nk-block-head nk-block-head-lg wide-sm">
                                            <div class="nk-block-head-content">
                                                <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
                                                <h2 class="nk-block-title fw-normal">Lista de Peliculas</h2>
                                                <div class="nk-block-des">
                                                    <!--<p class="lead">Using <a href="https://datatables.net/" target="_blank">DataTables</a>, add advanced interaction controls to your HTML tables. It is a highly flexible tool and all advanced features allow you to display table instantly and nice way.</p>
                                                    <p>Check out the <a href="https://datatables.net/" target="_blank">documentation</a> for a full overview.</p>-->
                                                <p class="lead">Esto es una lista de Peliculas</p>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head -->
                                        <div class="nk-block nk-block-lg">
                                            <div class="nk-block-head">
                                                <div class="nk-block-head-content">
                                                    <h4 class="nk-block-title">Peliculas</h4>
                                                </div>
                                            </div>
                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <table class="datatable-init table">
                                                        <thead>
                                                            <tr>
                                                                <th>Cartel</th>
                                                                <th>Nombre</th>
                                                                <th>Clasificacion</th>
                                                                <th>Año</th>
                                                                <th>Duracion</th>
                                                                <th>Argumento</th>
                                                                <th>Clasificacion de Edad</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           <?php foreach($_SESSION['peliculas'] as $pelicula){ ?>
                                                            <tr>
                                                                <td><img src="app/images/carteles/<?php echo $pelicula['imagen']?>"></td>
                                                                <td><?php echo $pelicula['titulo'] ?></td>
                                                                <td><?php echo $pelicula['clasif'] ?></td>
                                                                <td><?php echo $pelicula['año'] ?></td>
                                                                <td><?php echo $pelicula['duracion'] ?></td>
                                                                <td><?php echo $pelicula['argumento'] ?></td>
                                                                <td><?php echo $pelicula['edad'] ?></td>
                                                            </tr>
                                                           <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- .card-preview -->
                                        </div> <!-- nk-block -->
                                        <div class="nk-block nk-block-lg">
                                            <div class="nk-block-head">
                                                <div class="nk-block-head-content">
                                                    <h4 class="nk-block-title">Data Table with Export</h4>
                                                    <div class="nk-block-des">
                                                        <p>To intialize datatable with export buttons, use <code class="code-class">.datatable-init-export</code> with <code>table</code> element. <br> <strong class="text-dark">Please Note</strong> By default export libraries is not added globally, so please include <code class="code-class">"js/libs/datatable-btns.js"</code> into your page to active export buttons.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <table class="datatable-init-export nowrap table" data-export-title="Export">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Position</th>
                                                                <th>Office</th>
                                                                <th>Age</th>
                                                                <th>Start date</th>
                                                                <th>Salary</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Tiger Nixon</td>
                                                                <td>System Architect</td>
                                                                <td>Edinburgh</td>
                                                                <td>61</td>
                                                                <td>2011/04/25</td>
                                                                <td>$320,800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Garrett Winters</td>
                                                                <td>Accountant</td>
                                                                <td>Tokyo</td>
                                                                <td>63</td>
                                                                <td>2011/07/25</td>
                                                                <td>$170,750</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ashton Cox</td>
                                                                <td>Junior Technical Author</td>
                                                                <td>San Francisco</td>
                                                                <td>66</td>
                                                                <td>2009/01/12</td>
                                                                <td>$86,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cedric Kelly</td>
                                                                <td>Senior Javascript Developer</td>
                                                                <td>Edinburgh</td>
                                                                <td>22</td>
                                                                <td>2012/03/29</td>
                                                                <td>$433,060</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Airi Satou</td>
                                                                <td>Accountant</td>
                                                                <td>Tokyo</td>
                                                                <td>33</td>
                                                                <td>2008/11/28</td>
                                                                <td>$162,700</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Brielle Williamson</td>
                                                                <td>Integration Specialist</td>
                                                                <td>New York</td>
                                                                <td>61</td>
                                                                <td>2012/12/02</td>
                                                                <td>$372,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Herrod Chandler</td>
                                                                <td>Sales Assistant</td>
                                                                <td>San Francisco</td>
                                                                <td>59</td>
                                                                <td>2012/08/06</td>
                                                                <td>$137,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Rhona Davidson</td>
                                                                <td>Integration Specialist</td>
                                                                <td>Tokyo</td>
                                                                <td>55</td>
                                                                <td>2010/10/14</td>
                                                                <td>$327,900</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Colleen Hurst</td>
                                                                <td>Javascript Developer</td>
                                                                <td>San Francisco</td>
                                                                <td>39</td>
                                                                <td>2009/09/15</td>
                                                                <td>$205,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sonya Frost</td>
                                                                <td>Software Engineer</td>
                                                                <td>Edinburgh</td>
                                                                <td>23</td>
                                                                <td>2008/12/13</td>
                                                                <td>$103,600</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jena Gaines</td>
                                                                <td>Office Manager</td>
                                                                <td>London</td>
                                                                <td>30</td>
                                                                <td>2008/12/19</td>
                                                                <td>$90,560</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Quinn Flynn</td>
                                                                <td>Support Lead</td>
                                                                <td>Edinburgh</td>
                                                                <td>22</td>
                                                                <td>2013/03/03</td>
                                                                <td>$342,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Charde Marshall</td>
                                                                <td>Regional Director</td>
                                                                <td>San Francisco</td>
                                                                <td>36</td>
                                                                <td>2008/10/16</td>
                                                                <td>$470,600</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Haley Kennedy</td>
                                                                <td>Senior Marketing Designer</td>
                                                                <td>London</td>
                                                                <td>43</td>
                                                                <td>2012/12/18</td>
                                                                <td>$313,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tatyana Fitzpatrick</td>
                                                                <td>Regional Director</td>
                                                                <td>London</td>
                                                                <td>19</td>
                                                                <td>2010/03/17</td>
                                                                <td>$385,750</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Michael Silva</td>
                                                                <td>Marketing Designer</td>
                                                                <td>London</td>
                                                                <td>66</td>
                                                                <td>2012/11/27</td>
                                                                <td>$198,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Paul Byrd</td>
                                                                <td>Chief Financial Officer (CFO)</td>
                                                                <td>New York</td>
                                                                <td>64</td>
                                                                <td>2010/06/09</td>
                                                                <td>$725,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gloria Little</td>
                                                                <td>Systems Administrator</td>
                                                                <td>New York</td>
                                                                <td>59</td>
                                                                <td>2009/04/10</td>
                                                                <td>$237,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Bradley Greer</td>
                                                                <td>Software Engineer</td>
                                                                <td>London</td>
                                                                <td>41</td>
                                                                <td>2012/10/13</td>
                                                                <td>$132,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Dai Rios</td>
                                                                <td>Personnel Lead</td>
                                                                <td>Edinburgh</td>
                                                                <td>35</td>
                                                                <td>2012/09/26</td>
                                                                <td>$217,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenette Caldwell</td>
                                                                <td>Development Lead</td>
                                                                <td>New York</td>
                                                                <td>30</td>
                                                                <td>2011/09/03</td>
                                                                <td>$345,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Yuri Berry</td>
                                                                <td>Chief Marketing Officer (CMO)</td>
                                                                <td>New York</td>
                                                                <td>40</td>
                                                                <td>2009/06/25</td>
                                                                <td>$675,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Caesar Vance</td>
                                                                <td>Pre-Sales Support</td>
                                                                <td>New York</td>
                                                                <td>21</td>
                                                                <td>2011/12/12</td>
                                                                <td>$106,450</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Doris Wilder</td>
                                                                <td>Sales Assistant</td>
                                                                <td>Sydney</td>
                                                                <td>23</td>
                                                                <td>2010/09/20</td>
                                                                <td>$85,600</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Angelica Ramos</td>
                                                                <td>Chief Executive Officer (CEO)</td>
                                                                <td>London</td>
                                                                <td>47</td>
                                                                <td>2009/10/09</td>
                                                                <td>$1,200,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gavin Joyce</td>
                                                                <td>Developer</td>
                                                                <td>Edinburgh</td>
                                                                <td>42</td>
                                                                <td>2010/12/22</td>
                                                                <td>$92,575</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jennifer Chang</td>
                                                                <td>Regional Director</td>
                                                                <td>Singapore</td>
                                                                <td>28</td>
                                                                <td>2010/11/14</td>
                                                                <td>$357,650</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Brenden Wagner</td>
                                                                <td>Software Engineer</td>
                                                                <td>San Francisco</td>
                                                                <td>28</td>
                                                                <td>2011/06/07</td>
                                                                <td>$206,850</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Fiona Green</td>
                                                                <td>Chief Operating Officer (COO)</td>
                                                                <td>San Francisco</td>
                                                                <td>48</td>
                                                                <td>2010/03/11</td>
                                                                <td>$850,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shou Itou</td>
                                                                <td>Regional Marketing</td>
                                                                <td>Tokyo</td>
                                                                <td>20</td>
                                                                <td>2011/08/14</td>
                                                                <td>$163,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Michelle House</td>
                                                                <td>Integration Specialist</td>
                                                                <td>Sydney</td>
                                                                <td>37</td>
                                                                <td>2011/06/02</td>
                                                                <td>$95,400</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Suki Burks</td>
                                                                <td>Developer</td>
                                                                <td>London</td>
                                                                <td>53</td>
                                                                <td>2009/10/22</td>
                                                                <td>$114,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Prescott Bartlett</td>
                                                                <td>Technical Author</td>
                                                                <td>London</td>
                                                                <td>27</td>
                                                                <td>2011/05/07</td>
                                                                <td>$145,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gavin Cortez</td>
                                                                <td>Team Leader</td>
                                                                <td>San Francisco</td>
                                                                <td>22</td>
                                                                <td>2008/10/26</td>
                                                                <td>$235,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Martena Mccray</td>
                                                                <td>Post-Sales support</td>
                                                                <td>Edinburgh</td>
                                                                <td>46</td>
                                                                <td>2011/03/09</td>
                                                                <td>$324,050</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Unity Butler</td>
                                                                <td>Marketing Designer</td>
                                                                <td>San Francisco</td>
                                                                <td>47</td>
                                                                <td>2009/12/09</td>
                                                                <td>$85,675</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Howard Hatfield</td>
                                                                <td>Office Manager</td>
                                                                <td>San Francisco</td>
                                                                <td>51</td>
                                                                <td>2008/12/16</td>
                                                                <td>$164,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hope Fuentes</td>
                                                                <td>Secretary</td>
                                                                <td>San Francisco</td>
                                                                <td>41</td>
                                                                <td>2010/02/12</td>
                                                                <td>$109,850</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Vivian Harrell</td>
                                                                <td>Financial Controller</td>
                                                                <td>San Francisco</td>
                                                                <td>62</td>
                                                                <td>2009/02/14</td>
                                                                <td>$452,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Timothy Mooney</td>
                                                                <td>Office Manager</td>
                                                                <td>London</td>
                                                                <td>37</td>
                                                                <td>2008/12/11</td>
                                                                <td>$136,200</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jackson Bradshaw</td>
                                                                <td>Director</td>
                                                                <td>New York</td>
                                                                <td>65</td>
                                                                <td>2008/09/26</td>
                                                                <td>$645,750</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Olivia Liang</td>
                                                                <td>Support Engineer</td>
                                                                <td>Singapore</td>
                                                                <td>64</td>
                                                                <td>2011/02/03</td>
                                                                <td>$234,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Bruno Nash</td>
                                                                <td>Software Engineer</td>
                                                                <td>London</td>
                                                                <td>38</td>
                                                                <td>2011/05/03</td>
                                                                <td>$163,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sakura Yamamoto</td>
                                                                <td>Support Engineer</td>
                                                                <td>Tokyo</td>
                                                                <td>37</td>
                                                                <td>2009/08/19</td>
                                                                <td>$139,575</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Thor Walton</td>
                                                                <td>Developer</td>
                                                                <td>New York</td>
                                                                <td>61</td>
                                                                <td>2013/08/11</td>
                                                                <td>$98,540</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Finn Camacho</td>
                                                                <td>Support Engineer</td>
                                                                <td>San Francisco</td>
                                                                <td>47</td>
                                                                <td>2009/07/07</td>
                                                                <td>$87,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Serge Baldwin</td>
                                                                <td>Data Coordinator</td>
                                                                <td>Singapore</td>
                                                                <td>64</td>
                                                                <td>2012/04/09</td>
                                                                <td>$138,575</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Zenaida Frank</td>
                                                                <td>Software Engineer</td>
                                                                <td>New York</td>
                                                                <td>63</td>
                                                                <td>2010/01/04</td>
                                                                <td>$125,250</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Zorita Serrano</td>
                                                                <td>Software Engineer</td>
                                                                <td>San Francisco</td>
                                                                <td>56</td>
                                                                <td>2012/06/01</td>
                                                                <td>$115,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jennifer Acosta</td>
                                                                <td>Junior Javascript Developer</td>
                                                                <td>Edinburgh</td>
                                                                <td>43</td>
                                                                <td>2013/02/01</td>
                                                                <td>$75,650</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cara Stevens</td>
                                                                <td>Sales Assistant</td>
                                                                <td>New York</td>
                                                                <td>46</td>
                                                                <td>2011/12/06</td>
                                                                <td>$145,600</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hermione Butler</td>
                                                                <td>Regional Director</td>
                                                                <td>London</td>
                                                                <td>47</td>
                                                                <td>2011/03/21</td>
                                                                <td>$356,250</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lael Greer</td>
                                                                <td>Systems Administrator</td>
                                                                <td>London</td>
                                                                <td>21</td>
                                                                <td>2009/02/27</td>
                                                                <td>$103,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jonas Alexander</td>
                                                                <td>Developer</td>
                                                                <td>San Francisco</td>
                                                                <td>30</td>
                                                                <td>2010/07/14</td>
                                                                <td>$86,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shad Decker</td>
                                                                <td>Regional Director</td>
                                                                <td>Edinburgh</td>
                                                                <td>51</td>
                                                                <td>2008/11/13</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Michael Bruce</td>
                                                                <td>Javascript Developer</td>
                                                                <td>Singapore</td>
                                                                <td>29</td>
                                                                <td>2011/06/27</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Donna Snider</td>
                                                                <td>Customer Support</td>
                                                                <td>New York</td>
                                                                <td>27</td>
                                                                <td>2011/01/25</td>
                                                                <td>$112,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Zorita Serrano</td>
                                                                <td>Software Engineer</td>
                                                                <td>San Francisco</td>
                                                                <td>56</td>
                                                                <td>2012/06/01</td>
                                                                <td>$115,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jennifer Acosta</td>
                                                                <td>Junior Javascript Developer</td>
                                                                <td>Edinburgh</td>
                                                                <td>43</td>
                                                                <td>2013/02/01</td>
                                                                <td>$75,650</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cara Stevens</td>
                                                                <td>Sales Assistant</td>
                                                                <td>New York</td>
                                                                <td>46</td>
                                                                <td>2011/12/06</td>
                                                                <td>$145,600</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hermione Butler</td>
                                                                <td>Regional Director</td>
                                                                <td>London</td>
                                                                <td>47</td>
                                                                <td>2011/03/21</td>
                                                                <td>$356,250</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lael Greer</td>
                                                                <td>Systems Administrator</td>
                                                                <td>London</td>
                                                                <td>21</td>
                                                                <td>2009/02/27</td>
                                                                <td>$103,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jonas Alexander</td>
                                                                <td>Developer</td>
                                                                <td>San Francisco</td>
                                                                <td>30</td>
                                                                <td>2010/07/14</td>
                                                                <td>$86,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shad Decker</td>
                                                                <td>Regional Director</td>
                                                                <td>Edinburgh</td>
                                                                <td>51</td>
                                                                <td>2008/11/13</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Michael Bruce</td>
                                                                <td>Javascript Developer</td>
                                                                <td>Singapore</td>
                                                                <td>29</td>
                                                                <td>2011/06/27</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Donna Snider</td>
                                                                <td>Customer Support</td>
                                                                <td>New York</td>
                                                                <td>27</td>
                                                                <td>2011/01/25</td>
                                                                <td>$112,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Zorita Serrano</td>
                                                                <td>Software Engineer</td>
                                                                <td>San Francisco</td>
                                                                <td>56</td>
                                                                <td>2012/06/01</td>
                                                                <td>$115,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jennifer Acosta</td>
                                                                <td>Junior Javascript Developer</td>
                                                                <td>Edinburgh</td>
                                                                <td>43</td>
                                                                <td>2013/02/01</td>
                                                                <td>$75,650</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cara Stevens</td>
                                                                <td>Sales Assistant</td>
                                                                <td>New York</td>
                                                                <td>46</td>
                                                                <td>2011/12/06</td>
                                                                <td>$145,600</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hermione Butler</td>
                                                                <td>Regional Director</td>
                                                                <td>London</td>
                                                                <td>47</td>
                                                                <td>2011/03/21</td>
                                                                <td>$356,250</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lael Greer</td>
                                                                <td>Systems Administrator</td>
                                                                <td>London</td>
                                                                <td>21</td>
                                                                <td>2009/02/27</td>
                                                                <td>$103,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jonas Alexander</td>
                                                                <td>Developer</td>
                                                                <td>San Francisco</td>
                                                                <td>30</td>
                                                                <td>2010/07/14</td>
                                                                <td>$86,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shad Decker</td>
                                                                <td>Regional Director</td>
                                                                <td>Edinburgh</td>
                                                                <td>51</td>
                                                                <td>2008/11/13</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Michael Bruce</td>
                                                                <td>Javascript Developer</td>
                                                                <td>Singapore</td>
                                                                <td>29</td>
                                                                <td>2011/06/27</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Donna Snider</td>
                                                                <td>Customer Support</td>
                                                                <td>New York</td>
                                                                <td>27</td>
                                                                <td>2011/01/25</td>
                                                                <td>$112,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Zorita Serrano</td>
                                                                <td>Software Engineer</td>
                                                                <td>San Francisco</td>
                                                                <td>56</td>
                                                                <td>2012/06/01</td>
                                                                <td>$115,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jennifer Acosta</td>
                                                                <td>Junior Javascript Developer</td>
                                                                <td>Edinburgh</td>
                                                                <td>43</td>
                                                                <td>2013/02/01</td>
                                                                <td>$75,650</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cara Stevens</td>
                                                                <td>Sales Assistant</td>
                                                                <td>New York</td>
                                                                <td>46</td>
                                                                <td>2011/12/06</td>
                                                                <td>$145,600</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hermione Butler</td>
                                                                <td>Regional Director</td>
                                                                <td>London</td>
                                                                <td>47</td>
                                                                <td>2011/03/21</td>
                                                                <td>$356,250</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lael Greer</td>
                                                                <td>Systems Administrator</td>
                                                                <td>London</td>
                                                                <td>21</td>
                                                                <td>2009/02/27</td>
                                                                <td>$103,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jonas Alexander</td>
                                                                <td>Developer</td>
                                                                <td>San Francisco</td>
                                                                <td>30</td>
                                                                <td>2010/07/14</td>
                                                                <td>$86,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shad Decker</td>
                                                                <td>Regional Director</td>
                                                                <td>Edinburgh</td>
                                                                <td>51</td>
                                                                <td>2008/11/13</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Michael Bruce</td>
                                                                <td>Javascript Developer</td>
                                                                <td>Singapore</td>
                                                                <td>29</td>
                                                                <td>2011/06/27</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Donna Snider</td>
                                                                <td>Customer Support</td>
                                                                <td>New York</td>
                                                                <td>27</td>
                                                                <td>2011/01/25</td>
                                                                <td>$112,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Zorita Serrano</td>
                                                                <td>Software Engineer</td>
                                                                <td>San Francisco</td>
                                                                <td>56</td>
                                                                <td>2012/06/01</td>
                                                                <td>$115,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jennifer Acosta</td>
                                                                <td>Junior Javascript Developer</td>
                                                                <td>Edinburgh</td>
                                                                <td>43</td>
                                                                <td>2013/02/01</td>
                                                                <td>$75,650</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cara Stevens</td>
                                                                <td>Sales Assistant</td>
                                                                <td>New York</td>
                                                                <td>46</td>
                                                                <td>2011/12/06</td>
                                                                <td>$145,600</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hermione Butler</td>
                                                                <td>Regional Director</td>
                                                                <td>London</td>
                                                                <td>47</td>
                                                                <td>2011/03/21</td>
                                                                <td>$356,250</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lael Greer</td>
                                                                <td>Systems Administrator</td>
                                                                <td>London</td>
                                                                <td>21</td>
                                                                <td>2009/02/27</td>
                                                                <td>$103,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jonas Alexander</td>
                                                                <td>Developer</td>
                                                                <td>San Francisco</td>
                                                                <td>30</td>
                                                                <td>2010/07/14</td>
                                                                <td>$86,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shad Decker</td>
                                                                <td>Regional Director</td>
                                                                <td>Edinburgh</td>
                                                                <td>51</td>
                                                                <td>2008/11/13</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Michael Bruce</td>
                                                                <td>Javascript Developer</td>
                                                                <td>Singapore</td>
                                                                <td>29</td>
                                                                <td>2011/06/27</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Donna Snider</td>
                                                                <td>Customer Support</td>
                                                                <td>New York</td>
                                                                <td>27</td>
                                                                <td>2011/01/25</td>
                                                                <td>$112,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Zorita Serrano</td>
                                                                <td>Software Engineer</td>
                                                                <td>San Francisco</td>
                                                                <td>56</td>
                                                                <td>2012/06/01</td>
                                                                <td>$115,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jennifer Acosta</td>
                                                                <td>Junior Javascript Developer</td>
                                                                <td>Edinburgh</td>
                                                                <td>43</td>
                                                                <td>2013/02/01</td>
                                                                <td>$75,650</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cara Stevens</td>
                                                                <td>Sales Assistant</td>
                                                                <td>New York</td>
                                                                <td>46</td>
                                                                <td>2011/12/06</td>
                                                                <td>$145,600</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hermione Butler</td>
                                                                <td>Regional Director</td>
                                                                <td>London</td>
                                                                <td>47</td>
                                                                <td>2011/03/21</td>
                                                                <td>$356,250</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lael Greer</td>
                                                                <td>Systems Administrator</td>
                                                                <td>London</td>
                                                                <td>21</td>
                                                                <td>2009/02/27</td>
                                                                <td>$103,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jonas Alexander</td>
                                                                <td>Developer</td>
                                                                <td>San Francisco</td>
                                                                <td>30</td>
                                                                <td>2010/07/14</td>
                                                                <td>$86,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shad Decker</td>
                                                                <td>Regional Director</td>
                                                                <td>Edinburgh</td>
                                                                <td>51</td>
                                                                <td>2008/11/13</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Michael Bruce</td>
                                                                <td>Javascript Developer</td>
                                                                <td>Singapore</td>
                                                                <td>29</td>
                                                                <td>2011/06/27</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Donna Snider</td>
                                                                <td>Customer Support</td>
                                                                <td>New York</td>
                                                                <td>27</td>
                                                                <td>2011/01/25</td>
                                                                <td>$112,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Zorita Serrano</td>
                                                                <td>Software Engineer</td>
                                                                <td>San Francisco</td>
                                                                <td>56</td>
                                                                <td>2012/06/01</td>
                                                                <td>$115,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jennifer Acosta</td>
                                                                <td>Junior Javascript Developer</td>
                                                                <td>Edinburgh</td>
                                                                <td>43</td>
                                                                <td>2013/02/01</td>
                                                                <td>$75,650</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cara Stevens</td>
                                                                <td>Sales Assistant</td>
                                                                <td>New York</td>
                                                                <td>46</td>
                                                                <td>2011/12/06</td>
                                                                <td>$145,600</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hermione Butler</td>
                                                                <td>Regional Director</td>
                                                                <td>London</td>
                                                                <td>47</td>
                                                                <td>2011/03/21</td>
                                                                <td>$356,250</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lael Greer</td>
                                                                <td>Systems Administrator</td>
                                                                <td>London</td>
                                                                <td>21</td>
                                                                <td>2009/02/27</td>
                                                                <td>$103,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jonas Alexander</td>
                                                                <td>Developer</td>
                                                                <td>San Francisco</td>
                                                                <td>30</td>
                                                                <td>2010/07/14</td>
                                                                <td>$86,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shad Decker</td>
                                                                <td>Regional Director</td>
                                                                <td>Edinburgh</td>
                                                                <td>51</td>
                                                                <td>2008/11/13</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Michael Bruce</td>
                                                                <td>Javascript Developer</td>
                                                                <td>Singapore</td>
                                                                <td>29</td>
                                                                <td>2011/06/27</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Donna Snider</td>
                                                                <td>Customer Support</td>
                                                                <td>New York</td>
                                                                <td>27</td>
                                                                <td>2011/01/25</td>
                                                                <td>$112,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Zorita Serrano</td>
                                                                <td>Software Engineer</td>
                                                                <td>San Francisco</td>
                                                                <td>56</td>
                                                                <td>2012/06/01</td>
                                                                <td>$115,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jennifer Acosta</td>
                                                                <td>Junior Javascript Developer</td>
                                                                <td>Edinburgh</td>
                                                                <td>43</td>
                                                                <td>2013/02/01</td>
                                                                <td>$75,650</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cara Stevens</td>
                                                                <td>Sales Assistant</td>
                                                                <td>New York</td>
                                                                <td>46</td>
                                                                <td>2011/12/06</td>
                                                                <td>$145,600</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hermione Butler</td>
                                                                <td>Regional Director</td>
                                                                <td>London</td>
                                                                <td>47</td>
                                                                <td>2011/03/21</td>
                                                                <td>$356,250</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lael Greer</td>
                                                                <td>Systems Administrator</td>
                                                                <td>London</td>
                                                                <td>21</td>
                                                                <td>2009/02/27</td>
                                                                <td>$103,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jonas Alexander</td>
                                                                <td>Developer</td>
                                                                <td>San Francisco</td>
                                                                <td>30</td>
                                                                <td>2010/07/14</td>
                                                                <td>$86,500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shad Decker</td>
                                                                <td>Regional Director</td>
                                                                <td>Edinburgh</td>
                                                                <td>51</td>
                                                                <td>2008/11/13</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Michael Bruce</td>
                                                                <td>Javascript Developer</td>
                                                                <td>Singapore</td>
                                                                <td>29</td>
                                                                <td>2011/06/27</td>
                                                                <td>$183,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Donna Snider</td>
                                                                <td>Customer Support</td>
                                                                <td>New York</td>
                                                                <td>27</td>
                                                                <td>2011/01/25</td>
                                                                <td>$112,000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- .card-preview -->
                                        </div> <!-- nk-block -->
                                        <div class="nk-block nk-block-lg">
                                            <div class="nk-block-head">
                                                <div class="nk-block-head-content">
                                                    <h4 class="nk-block-title">Data Table</h4>
                                                    <div class="nk-block-des">
                                                        <p>Using the most basic table markup, here’s how <code class="code-class">.table</code> based tables look by default.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                        <thead>
                                                            <tr class="nk-tb-item nk-tb-head">
                                                                <th class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid">
                                                                        <label class="custom-control-label" for="uid"></label>
                                                                    </div>
                                                                </th>
                                                                <th class="nk-tb-col"><span class="sub-text">User</span></th>
                                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Balance</span></th>
                                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                                                <th class="nk-tb-col tb-col-xl"><span class="sub-text">Verified</span></th>
                                                                <th class="nk-tb-col tb-col-xl"><span class="sub-text">Last Login</span></th>
                                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid1">
                                                                        <label class="custom-control-label" for="uid1"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                            <span>AB</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                            <span>info@softnio.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                                    <span class="tb-amount">35040.34 <span class="currency">USD</span></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>+811 847-4958</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl" data-order="Email Verified - Kyc Unverified">
                                                                    <ul class="list-status">
                                                                        <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                                                        <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                                                                    </ul>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl">
                                                                    <span>05 Oct 2019</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span class="tb-status text-success">Active</span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                                                                <em class="icon ni ni-wallet-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                                <em class="icon ni ni-user-cross-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                                        <li class="divider"></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr><!-- .nk-tb-item  -->
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid2">
                                                                        <label class="custom-control-label" for="uid2"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-success d-none d-sm-flex">
                                                                            <span>AL</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Ashley Lawson <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                                            <span>ashley@softnio.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="580.00">
                                                                    <span class="tb-amount">580.00 <span class="currency">USD</span></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>+124 394-1787</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl" data-order="Email Verified - Kyc Submited">
                                                                    <ul class="list-status">
                                                                        <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                                                        <li><em class="icon text-info ni ni-alert-circle"></em> <span>KYC</span></li>
                                                                    </ul>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl">
                                                                    <span>07 Feb 2020</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span class="tb-status text-warning">Pending</span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                                                                <em class="icon ni ni-wallet-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                                <em class="icon ni ni-user-cross-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                                        <li class="divider"></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr><!-- .nk-tb-item  -->
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid3">
                                                                        <label class="custom-control-label" for="uid3"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-info d-none d-sm-flex">
                                                                            <span>JL</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Joe Larson <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                            <span>larson@example.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="32000.34">
                                                                    <span class="tb-amount">32,000.34 <span class="currency">USD</span></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>+168 603-2320</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl" data-order="Email Verified - Kyc Verified">
                                                                    <ul class="list-status">
                                                                        <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                                                        <li><em class="icon text-success ni ni-alert-circle"></em> <span>KYC</span></li>
                                                                    </ul>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl">
                                                                    <span>04 Feb 2020</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span class="tb-status text-success">Active</span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                                                                <em class="icon ni ni-wallet-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                                <em class="icon ni ni-user-cross-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                                        <li class="divider"></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr><!-- .nk-tb-item  -->
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid4">
                                                                        <label class="custom-control-label" for="uid4"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-danger d-none d-sm-flex">
                                                                            <span>JM</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Jane Montgomery <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                            <span>jane84@example.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="0.00">
                                                                    <span class="tb-amount">0.00 <span class="currency">USD</span></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>+439 271-5360</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl" data-order="Email Unverified - Kyc Unverified">
                                                                    <ul class="list-status">
                                                                        <li><em class="icon ni ni-check-circle"></em> <span>Email</span></li>
                                                                        <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                                                                    </ul>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl">
                                                                    <span>01 Feb 2020</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span class="tb-status text-danger">Suspend</span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                                                                <em class="icon ni ni-wallet-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                                <em class="icon ni ni-user-cross-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                                        <li class="divider"></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr><!-- .nk-tb-item  -->
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid5">
                                                                        <label class="custom-control-label" for="uid5"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-purple d-none d-sm-flex">
                                                                            <span>FB</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Frances Burns <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                            <span>info@softnio.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="42.50">
                                                                    <span class="tb-amount">42.50 <span class="currency">USD</span></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>+639 130-3150</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl" data-order="Email Submited - Kyc Unverified">
                                                                    <ul class="list-status">
                                                                        <li><em class="icon text-info ni ni-check-circle"></em> <span>Email</span></li>
                                                                        <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                                                                    </ul>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl">
                                                                    <span>31 Jan 2020</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span class="tb-status text-success">Active</span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                                                                <em class="icon ni ni-wallet-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                                <em class="icon ni ni-user-cross-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                                        <li class="divider"></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr><!-- .nk-tb-item  -->
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid6">
                                                                        <label class="custom-control-label" for="uid6"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-dark d-none d-sm-flex">
                                                                            <span>AB</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Alan Butler<span class="dot dot-success d-md-none ms-1"></span></span>
                                                                            <span>butler@example.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="440.34">
                                                                    <span class="tb-amount">440.34 <span class="currency">USD</span></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>+963 309-1706</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl" data-order="Email Submited - Kyc More Info">
                                                                    <ul class="list-status">
                                                                        <li><em class="icon text-info ni ni-check-circle"></em> <span>Email</span></li>
                                                                        <li><em class="icon text-warning ni ni-alert-circle"></em> <span>KYC</span></li>
                                                                    </ul>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl">
                                                                    <span>18 Jan 2020</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span class="tb-status text-info">Inactive</span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                                                                <em class="icon ni ni-wallet-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                                <em class="icon ni ni-user-cross-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                                        <li class="divider"></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr><!-- .nk-tb-item  -->
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid7">
                                                                        <label class="custom-control-label" for="uid7"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-warning d-none d-sm-flex">
                                                                            <span>VL</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Victoria Lynch <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                            <span>victoria@example.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="59400.68">
                                                                    <span class="tb-amount">59,400.68 <span class="currency">USD</span></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>+811 985-4846</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl" data-order="Email Verified - Kyc Verified">
                                                                    <ul class="list-status">
                                                                        <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                                                        <li><em class="icon text-success ni ni-alert-circle"></em> <span>KYC</span></li>
                                                                    </ul>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl">
                                                                    <span>15 Jan 2020</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span class="tb-status text-success">Active</span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                                                                <em class="icon ni ni-wallet-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                                <em class="icon ni ni-user-cross-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                                        <li class="divider"></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr><!-- .nk-tb-item  -->
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid8">
                                                                        <label class="custom-control-label" for="uid8"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-success d-none d-sm-flex">
                                                                            <span>PN</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Patrick Newman <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                            <span>patrick@example.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="30.00">
                                                                    <span class="tb-amount">30.00 <span class="currency">USD</span></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>+942 238-4474</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl" data-order="Email Verified - Kyc Submited">
                                                                    <ul class="list-status">
                                                                        <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                                                        <li><em class="icon text-info ni ni-alert-circle"></em> <span>KYC</span></li>
                                                                    </ul>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl">
                                                                    <span>08 Jan 2020</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span class="tb-status text-success">Active</span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                                                                <em class="icon ni ni-wallet-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                                <em class="icon ni ni-user-cross-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                                        <li class="divider"></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr><!-- .nk-tb-item  -->
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid9">
                                                                        <label class="custom-control-label" for="uid9"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-info d-none d-sm-flex">
                                                                            <span>JL</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Joe Larson <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                            <span>larson@example.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="32000.34">
                                                                    <span class="tb-amount">32,000.34 <span class="currency">USD</span></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>+168 603-2320</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl" data-order="Email Verified - Kyc Verified">
                                                                    <ul class="list-status">
                                                                        <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                                                        <li><em class="icon text-success ni ni-alert-circle"></em> <span>KYC</span></li>
                                                                    </ul>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl">
                                                                    <span>04 Feb 2020</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span class="tb-status text-success">Active</span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                                                                <em class="icon ni ni-wallet-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                                <em class="icon ni ni-user-cross-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                                        <li class="divider"></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr><!-- .nk-tb-item  -->
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid10">
                                                                        <label class="custom-control-label" for="uid10"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-success d-none d-sm-flex">
                                                                            <span>AL</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Ashley Lawson <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                                            <span>ashley@softnio.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="580.00">
                                                                    <span class="tb-amount">580.00 <span class="currency">USD</span></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>+124 394-1787</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl" data-order="Email Verified - Kyc Submited">
                                                                    <ul class="list-status">
                                                                        <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>
                                                                        <li><em class="icon text-info ni ni-alert-circle"></em> <span>KYC</span></li>
                                                                    </ul>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl">
                                                                    <span>07 Feb 2020</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span class="tb-status text-warning">Pending</span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                                                                <em class="icon ni ni-wallet-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                                <em class="icon ni ni-user-cross-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                                        <li class="divider"></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr><!-- .nk-tb-item  -->
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid11">
                                                                        <label class="custom-control-label" for="uid11"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-danger d-none d-sm-flex">
                                                                            <span>JM</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Jane Montgomery <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                            <span>jane84@example.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="0.00">
                                                                    <span class="tb-amount">0.00 <span class="currency">USD</span></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>+439 271-5360</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl" data-order="Email Unverified - Kyc Unverified">
                                                                    <ul class="list-status">
                                                                        <li><em class="icon ni ni-check-circle"></em> <span>Email</span></li>
                                                                        <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                                                                    </ul>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl">
                                                                    <span>01 Feb 2020</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span class="tb-status text-danger">Suspend</span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                                                                <em class="icon ni ni-wallet-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                                <em class="icon ni ni-user-cross-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                                        <li class="divider"></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr><!-- .nk-tb-item  -->
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid12">
                                                                        <label class="custom-control-label" for="uid12"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-purple d-none d-sm-flex">
                                                                            <span>FB</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Frances Burns <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                            <span>info@softnio.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="42.50">
                                                                    <span class="tb-amount">42.50 <span class="currency">USD</span></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>+639 130-3150</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl" data-order="Email Submited - Kyc Unverified">
                                                                    <ul class="list-status">
                                                                        <li><em class="icon text-info ni ni-check-circle"></em> <span>Email</span></li>
                                                                        <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                                                                    </ul>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl">
                                                                    <span>31 Jan 2020</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span class="tb-status text-success">Active</span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                                                                <em class="icon ni ni-wallet-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                                <em class="icon ni ni-user-cross-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                                        <li class="divider"></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr><!-- .nk-tb-item  -->
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col nk-tb-col-check">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="uid13">
                                                                        <label class="custom-control-label" for="uid13"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-dark d-none d-sm-flex">
                                                                            <span>AB</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">Alan Butler<span class="dot dot-success d-md-none ms-1"></span></span>
                                                                            <span>butler@example.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb" data-order="440.34">
                                                                    <span class="tb-amount">440.34 <span class="currency">USD</span></span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span>+963 309-1706</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl" data-order="Email Submited - Kyc More Info">
                                                                    <ul class="list-status">
                                                                        <li><em class="icon text-info ni ni-check-circle"></em> <span>Email</span></li>
                                                                        <li><em class="icon text-warning ni ni-alert-circle"></em> <span>KYC</span></li>
                                                                    </ul>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-xl">
                                                                    <span>18 Jan 2020</span>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <span class="tb-status text-info">Inactive</span>
                                                                </td>
                                                                <td class="nk-tb-col nk-tb-col-tools">
                                                                    <ul class="nk-tb-actions gx-1">
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                                                                <em class="icon ni ni-wallet-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                                <em class="icon ni ni-mail-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nk-tb-action-hidden">
                                                                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                                <em class="icon ni ni-user-cross-fill"></em>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                                        <li class="divider"></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                                                        <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr><!-- .nk-tb-item  -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- .card-preview -->
                                        </div> <!-- nk-block -->
                                    </div><!-- .components-preview -->
                                </div>
                                <!-- footer @s -->
                                <?php include '../../admin/assets/templates/footer.php'; ?>
                                <!-- footer @e -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    <?php include '../../admin/assets/config/js.php'; ?>
    <script src="./assets/js/libs/datatable-btns.js?ver=3.2.3"></script>
</body>

</html>