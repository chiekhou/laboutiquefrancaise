<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DoctrineMigrations'.\DIRECTORY_SEPARATOR.'StorageConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DoctrineMigrationsConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $name;
    private $migrationsPaths;
    private $storage;
    private $dirName;
    private $namespace;
    private $tableName;
    private $columnName;
    private $columnLength;
    private $executedAtColumnName;
    private $allOrNothing;
    private $customTemplate;
    private $organizeMigrations;
    private $_usedProperties = [];

    /**
     * @default 'Application Migrations'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "name" option is deprecated.
     * @return $this
     */
    public function name($value): self
    {
        $this->_usedProperties['name'] = true;
        $this->name = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function migrationsPaths(string $name, $value): self
    {
        $this->_usedProperties['migrationsPaths'] = true;
        $this->migrationsPaths[$name] = $value;

        return $this;
    }

    public function storage(array $value = []): \Symfony\Config\DoctrineMigrations\StorageConfig
    {
        if (null === $this->storage) {
            $this->_usedProperties['storage'] = true;
            $this->storage = new \Symfony\Config\DoctrineMigrations\StorageConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "storage()" has already been initialized. You cannot pass values the second time you call storage().');
        }

        return $this->storage;
    }

    /**
     * @default '%kernel.root_dir%/DoctrineMigrations'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "dir_name" option is deprecated. Use "migrations_paths" instead.
     * @return $this
     */
    public function dirName($value): self
    {
        $this->_usedProperties['dirName'] = true;
        $this->dirName = $value;

        return $this;
    }

    /**
     * @default 'Application\\Migrations'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "namespace" option is deprecated. Use "migrations_paths" instead.
     * @return $this
     */
    public function namespace($value): self
    {
        $this->_usedProperties['namespace'] = true;
        $this->namespace = $value;

        return $this;
    }

    /**
     * @default 'migration_versions'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "table_name" option is deprecated. Use "storage.table_storage.table_name" instead.
     * @return $this
     */
    public function tableName($value): self
    {
        $this->_usedProperties['tableName'] = true;
        $this->tableName = $value;

        return $this;
    }

    /**
     * @default 'version'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "column_name" option is deprecated. Use "storage.table_storage.version_column_name" instead.
     * @return $this
     */
    public function columnName($value): self
    {
        $this->_usedProperties['columnName'] = true;
        $this->columnName = $value;

        return $this;
    }

    /**
     * @default 14
     * @param ParamConfigurator|mixed $value
     * @deprecated The "column_length" option is deprecated. Use "storage.table_storage.version_column_length" instead.
     * @return $this
     */
    public function columnLength($value): self
    {
        $this->_usedProperties['columnLength'] = true;
        $this->columnLength = $value;

        return $this;
    }

    /**
     * @default 'executed_at'
     * @param ParamConfigurator|mixed $value
     * @deprecated The "executed_at_column_name" option is deprecated. Use "storage.table_storage.executed_at_column_name" instead.
     * @return $this
     */
    public function executedAtColumnName($value): self
    {
        $this->_usedProperties['executedAtColumnName'] = true;
        $this->executedAtColumnName = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function allOrNothing($value): self
    {
        $this->_usedProperties['allOrNothing'] = true;
        $this->allOrNothing = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function customTemplate($value): self
    {
        $this->_usedProperties['customTemplate'] = true;
        $this->customTemplate = $value;

        return $this;
    }

    /**
     * Organize migrations mode. Possible values are: "BY_YEAR", "BY_YEAR_AND_MONTH", false
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function organizeMigrations($value): self
    {
        $this->_usedProperties['organizeMigrations'] = true;
        $this->organizeMigrations = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'doctrine_migrations';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('name', $value)) {
            $this->_usedProperties['name'] = true;
            $this->name = $value['name'];
            unset($value['name']);
        }

        if (array_key_exists('migrations_paths', $value)) {
            $this->_usedProperties['migrationsPaths'] = true;
            $this->migrationsPaths = $value['migrations_paths'];
            unset($value['migrations_paths']);
        }

        if (array_key_exists('storage', $value)) {
            $this->_usedProperties['storage'] = true;
            $this->storage = new \Symfony\Config\DoctrineMigrations\StorageConfig($value['storage']);
            unset($value['storage']);
        }

        if (array_key_exists('dir_name', $value)) {
            $this->_usedProperties['dirName'] = true;
            $this->dirName = $value['dir_name'];
            unset($value['dir_name']);
        }

        if (array_key_exists('namespace', $value)) {
            $this->_usedProperties['namespace'] = true;
            $this->namespace = $value['namespace'];
            unset($value['namespace']);
        }

        if (array_key_exists('table_name', $value)) {
            $this->_usedProperties['tableName'] = true;
            $this->tableName = $value['table_name'];
            unset($value['table_name']);
        }

        if (array_key_exists('column_name', $value)) {
            $this->_usedProperties['columnName'] = true;
            $this->columnName = $value['column_name'];
            unset($value['column_name']);
        }

        if (array_key_exists('column_length', $value)) {
            $this->_usedProperties['columnLength'] = true;
            $this->columnLength = $value['column_length'];
            unset($value['column_length']);
        }

        if (array_key_exists('executed_at_column_name', $value)) {
            $this->_usedProperties['executedAtColumnName'] = true;
            $this->executedAtColumnName = $value['executed_at_column_name'];
            unset($value['executed_at_column_name']);
        }

        if (array_key_exists('all_or_nothing', $value)) {
            $this->_usedProperties['allOrNothing'] = true;
            $this->allOrNothing = $value['all_or_nothing'];
            unset($value['all_or_nothing']);
        }

        if (array_key_exists('custom_template', $value)) {
            $this->_usedProperties['customTemplate'] = true;
            $this->customTemplate = $value['custom_template'];
            unset($value['custom_template']);
        }

        if (array_key_exists('organize_migrations', $value)) {
            $this->_usedProperties['organizeMigrations'] = true;
            $this->organizeMigrations = $value['organize_migrations'];
            unset($value['organize_migrations']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['migrationsPaths'])) {
            $output['migrations_paths'] = $this->migrationsPaths;
        }
        if (isset($this->_usedProperties['storage'])) {
            $output['storage'] = $this->storage->toArray();
        }
        if (isset($this->_usedProperties['dirName'])) {
            $output['dir_name'] = $this->dirName;
        }
        if (isset($this->_usedProperties['namespace'])) {
            $output['namespace'] = $this->namespace;
        }
        if (isset($this->_usedProperties['tableName'])) {
            $output['table_name'] = $this->tableName;
        }
        if (isset($this->_usedProperties['columnName'])) {
            $output['column_name'] = $this->columnName;
        }
        if (isset($this->_usedProperties['columnLength'])) {
            $output['column_length'] = $this->columnLength;
        }
        if (isset($this->_usedProperties['executedAtColumnName'])) {
            $output['executed_at_column_name'] = $this->executedAtColumnName;
        }
        if (isset($this->_usedProperties['allOrNothing'])) {
            $output['all_or_nothing'] = $this->allOrNothing;
        }
        if (isset($this->_usedProperties['customTemplate'])) {
            $output['custom_template'] = $this->customTemplate;
        }
        if (isset($this->_usedProperties['organizeMigrations'])) {
            $output['organize_migrations'] = $this->organizeMigrations;
        }

        return $output;
    }

}
