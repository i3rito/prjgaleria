<?php

class Migrate extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('migration');
	}

	public function forward($all_param = 0)
	{
		$all = $all_param === '--all';
		
		$migrations = $this->migration->find_migrations();
		$current_version = $this->migration->version();
		$keys = array_keys($migrations);
		$pos = array_search($current_version, $keys);
		
		if( $all )
		{
			$temp = array_slice($migrations, $pos + 1, null, true);
			foreach($temp as $version => $file )
			{
				$version_name = substr(explode($version, $file)[1], 1, -4);
				$retVal = $this->migration->version($version);
				$this->handle_migration_result($retVal, $version, $version_name);
			}
		}
		else
		{
			$nova_pos = min(count($keys)-1, $pos + 1);
			$nova_versao = $keys[$nova_pos];
			$nova_versao_nome = substr(explode($nova_versao, $migrations[$nova_versao])[1], 1, -4);
			$retVal = $this->migration->version($nova_versao);
			$this->handle_migration_result($retVal, $nova_versao, $nova_versao_nome);
		}

	}

	public function rollback($nova_versao = null)
	{
		$migrations = $this->migration->find_migrations();
		$keys = array_keys($migrations);
		
		if( ! $nova_versao )
		{
			$current_version = $this->migration->version();
			$pos = array_search($current_version, $keys);
			$nova_pos = max(-1, $pos - 1);
			$nova_versao = $keys[$nova_pos];
		}
		
		$nova_versao_nome = substr(explode($nova_versao, $migrations[$nova_versao])[1], 1, -4);
		$retVal = $this->migration->version($nova_versao);
		$this->handle_migration_result($retVal, $nova_versao, $nova_versao_nome);

	}

	private function handle_migration_result($retVal, $target_migration, $target_migration_name)
	{
		if( is_bool($retVal) )
		{
			# Se for booleano, indica erro (FALSE) ou nada feito (TRUE).
			# Se for string, indica a versão para a qual o banco de dados foi migrado.
			if( $retVal )
			{
				echo "Nenhuma migração executada.\n";
			}
			else
			{
				$error_string = $this->migration->error_string();
				echo "Erro na execução da migração.\n";
				echo $error_string;
			}
		}
		else
		{
			if( is_string($retVal) )
			{
				echo "Migração executada com sucesso.\n";
			}
		}
		echo "Banco de dados na versão: $target_migration ($target_migration_name)\n";

	}
}
