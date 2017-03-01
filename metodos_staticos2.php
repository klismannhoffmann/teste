
<?php
class Aplicacao
{
/* método Estático
* lê o arquivo readme.txt
*/
static function Sobre()
{
$fd = fopen('readm.txt','r');
while ($linha = fgets($fd, 200))
{
echo $linha;
}
}
}
echo "Informações sobre a aplicação\n";
echo "=============================\n";
Aplicacao::Sobre();
?>