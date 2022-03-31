<?php
/**
 * Tags for Craft CMS
 *
 * @link      https://ethercreative.co.uk
 * @copyright Copyright (c) 2019 Ether Creative
 */

namespace ether\tagManager\elements\db;

use Craft;
use ether\tagManager\TagManager;
use yii\db\Expression;

/**
 * Class TagQuery
 *
 * @author  Ether Creative
 * @package ether\tagManager\elements\db
 */
class TagQuery extends \craft\elements\db\TagQuery
{

	protected function afterPrepare (): bool
	{
		if (Craft::$app->getDb()->getDriverName() === 'mysql')
			return parent::afterPrepare();

		if (!TagManager::getInstance()->getSettings()->enableUsage)
			return parent::afterPrepare();

		if (count($this->query->select) === 1 && strtoupper($this->query->select[0]) === 'COUNT(*)')
			return parent::afterPrepare();

		$getUsage = new Expression(
			'(SELECT COUNT(*) FROM (SELECT [[r.sourceId]], [[r.sourceSiteId]] FROM {{%relations}} r WHERE [[r.targetId]] = [[elements.id]] GROUP BY [[r.sourceId]], [[r.sourceSiteId]]) as [[usage]]) as [[usage]]'
		);

		$this->query->addSelect(new Expression('[[subquery.usage]] as [[usage]]'));
		$this->subQuery->addSelect($getUsage);

		return parent::afterPrepare();
	}

}