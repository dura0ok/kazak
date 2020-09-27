<?php


namespace App\Services;

/**
 * Class Tree
 * @package App\Services
 */
class Tree
{
    /**
     * @var array
     */
    private $records;

    /**
     * Tree constructor.
     * @param array $records
     */
    public function __construct(array $records)
    {
        $this->records = $records;
    }

    /**
     * @param int $parentId
     * @return array
     */
    public function build(int $parentId): array
    {
        $result = [];
        foreach ($this->records as $record) {
            if ($record['parent_id'] === $parentId) {
                $record['children'] = $this->build($record['id']);
                $result[] = $record;
            }
        }
        return $result;
    }

}
