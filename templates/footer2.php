

<footer>
        
        </footer>
            
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>     
        
    
            </body>
    
    </html>
    <?php  $html=ob_get_clean();
    
    //echo $html;
    
    require_once '../librerias/dompdf/autoload.inc.php' ;
    use Dompdf\Dompdf ;
    $dompdf = new Dompdf();
    $options =$dompdf->getOptions();
    $options->set(array('isRemoteEnable' =>true));
    $dompdf ->setOptions($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('letter');
    $dompdf->render();
    $dompdf->stream("archivo_.pdf" , array("Attachment"=>false))
    
    ?>
