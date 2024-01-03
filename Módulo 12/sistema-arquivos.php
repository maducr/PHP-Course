<?php
// fopen e fclose
$filename = "example.txt";
$file = fopen($filename, "w"); // Abre o arquivo para escrita
fwrite($file, "Hello, World!"); // Escreve no arquivo
fclose($file); // Fecha o arquivo

// Verifica se o arquivo foi criado com sucesso
if (file_exists($filename)) {
    echo "Arquivo '$filename' criado com sucesso.\n\n";

    // fread e fwrite
    $file = fopen($filename, "r"); // Abre o arquivo para leitura
    $content = fread($file, filesize($filename)); // Lê o conteúdo do arquivo
    fclose($file); // Fecha o arquivo

    echo "Conteúdo do Arquivo:\n$content\n\n";

    // file_get_contents e file_put_contents
    $newContent = "New content added.";
    file_put_contents($filename, $newContent, FILE_APPEND); // Adiciona conteúdo ao arquivo
    $updatedContent = file_get_contents($filename);

    echo "Conteúdo Atualizado do Arquivo:\n$updatedContent\n\n";

    // filesize e filetype
    $size = filesize($filename);
    $type = filetype($filename);
    echo "Tamanho do Arquivo: $size bytes\n";
    echo "Tipo do Arquivo: $type\n\n";

    // scandir e mkdir
    $directory = "example_directory";
    mkdir($directory); // Cria um diretório
    $filesInDirectory = scandir($directory); // Lista os arquivos no diretório
    echo "Arquivos no Diretório '$directory':\n" . print_r($filesInDirectory, true) . "\n\n";

    // unlink (is_file) e rmdir (is_dir)
    unlink($filename); // Exclui o arquivo
    if (!file_exists($filename)) {
        echo "Arquivo '$filename' excluído com sucesso.\n";
    }

    rmdir($directory); // Exclui o diretório
    if (!is_dir($directory)) {
        echo "Diretório '$directory' excluído com sucesso.\n";
    }
} else {
    echo "Falha ao criar o arquivo '$filename'.\n";
}
