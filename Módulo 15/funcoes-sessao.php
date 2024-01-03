<?php
// Inicia a sessão
session_start();

// session_status
$status = session_status();
echo "Status da Sessão: ";
switch ($status) {
    case PHP_SESSION_DISABLED:
        echo "Desabilitada";
        break;
    case PHP_SESSION_NONE:
        echo "Não iniciada";
        break;
    case PHP_SESSION_ACTIVE:
        echo "Ativa";
        break;
}
echo "\n\n";

// session_id
$sessionId = session_id();
echo "ID da Sessão Atual: $sessionId\n\n";

// session_regenerate_id
session_regenerate_id();
$newSessionId = session_id();
echo "Novo ID da Sessão após Regeneração: $newSessionId\n\n";

// Defina algumas variáveis de sessão para demonstração
$_SESSION['user_id'] = 123;
$_SESSION['username'] = 'john_doe';

// Exibe as variáveis de sessão
echo "Variáveis de Sessão:\n";
print_r($_SESSION);
echo "\n";

// session_destroy
session_destroy();
echo "Sessão destruída. Variáveis de Sessão após session_destroy:\n";
print_r($_SESSION);
echo "\n";

// session_unset
session_start(); // Inicia uma nova sessão
$_SESSION['new_variable'] = 'TESTE session_unset';
echo "Nova Sessão iniciada. Variáveis de Sessão:\n";
print_r($_SESSION);
echo "\n";

session_unset();
echo "Variáveis de Sessão após session_unset:\n";
print_r($_SESSION);
echo "\n";

// session_commit
session_commit();
echo "Sessão salva e encerrada após session_commit.\n";

// session_abort
session_start(); // Inicia uma nova sessão
$_SESSION['temp_data'] = 'Dados temporários';
session_abort();
echo "Sessão abortada. Variáveis de Sessão após session_abort:\n";
print_r($_SESSION);
echo "\n";

// session_reset
session_start(); // Inicia uma nova sessão
$_SESSION['reset_data'] = 'Dados para resetar';
echo "Variáveis de Sessão antes de session_reset:\n";
print_r($_SESSION);
echo "\n";

session_reset(); // Reinicia a sessão mantendo os dados antigos
echo "Variáveis de Sessão após session_reset:\n";
print_r($_SESSION);
echo "\n";