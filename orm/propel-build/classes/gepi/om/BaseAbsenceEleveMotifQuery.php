<?php


/**
 * Base class that represents a query for the 'a_motifs' table.
 *
 * Liste des motifs possibles pour une absence
 *
 * @method     AbsenceEleveMotifQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AbsenceEleveMotifQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method     AbsenceEleveMotifQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method     AbsenceEleveMotifQuery orderBySortableRank($order = Criteria::ASC) Order by the sortable_rank column
 * @method     AbsenceEleveMotifQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     AbsenceEleveMotifQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     AbsenceEleveMotifQuery groupById() Group by the id column
 * @method     AbsenceEleveMotifQuery groupByNom() Group by the nom column
 * @method     AbsenceEleveMotifQuery groupByCommentaire() Group by the commentaire column
 * @method     AbsenceEleveMotifQuery groupBySortableRank() Group by the sortable_rank column
 * @method     AbsenceEleveMotifQuery groupByCreatedAt() Group by the created_at column
 * @method     AbsenceEleveMotifQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     AbsenceEleveMotifQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AbsenceEleveMotifQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AbsenceEleveMotifQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AbsenceEleveMotifQuery leftJoinAbsenceEleveTraitement($relationAlias = null) Adds a LEFT JOIN clause to the query using the AbsenceEleveTraitement relation
 * @method     AbsenceEleveMotifQuery rightJoinAbsenceEleveTraitement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AbsenceEleveTraitement relation
 * @method     AbsenceEleveMotifQuery innerJoinAbsenceEleveTraitement($relationAlias = null) Adds a INNER JOIN clause to the query using the AbsenceEleveTraitement relation
 *
 * @method     AbsenceEleveMotif findOne(PropelPDO $con = null) Return the first AbsenceEleveMotif matching the query
 * @method     AbsenceEleveMotif findOneOrCreate(PropelPDO $con = null) Return the first AbsenceEleveMotif matching the query, or a new AbsenceEleveMotif object populated from the query conditions when no match is found
 *
 * @method     AbsenceEleveMotif findOneById(int $id) Return the first AbsenceEleveMotif filtered by the id column
 * @method     AbsenceEleveMotif findOneByNom(string $nom) Return the first AbsenceEleveMotif filtered by the nom column
 * @method     AbsenceEleveMotif findOneByCommentaire(string $commentaire) Return the first AbsenceEleveMotif filtered by the commentaire column
 * @method     AbsenceEleveMotif findOneBySortableRank(int $sortable_rank) Return the first AbsenceEleveMotif filtered by the sortable_rank column
 * @method     AbsenceEleveMotif findOneByCreatedAt(string $created_at) Return the first AbsenceEleveMotif filtered by the created_at column
 * @method     AbsenceEleveMotif findOneByUpdatedAt(string $updated_at) Return the first AbsenceEleveMotif filtered by the updated_at column
 *
 * @method     array findById(int $id) Return AbsenceEleveMotif objects filtered by the id column
 * @method     array findByNom(string $nom) Return AbsenceEleveMotif objects filtered by the nom column
 * @method     array findByCommentaire(string $commentaire) Return AbsenceEleveMotif objects filtered by the commentaire column
 * @method     array findBySortableRank(int $sortable_rank) Return AbsenceEleveMotif objects filtered by the sortable_rank column
 * @method     array findByCreatedAt(string $created_at) Return AbsenceEleveMotif objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return AbsenceEleveMotif objects filtered by the updated_at column
 *
 * @package    propel.generator.gepi.om
 */
abstract class BaseAbsenceEleveMotifQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseAbsenceEleveMotifQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'gepi', $modelName = 'AbsenceEleveMotif', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AbsenceEleveMotifQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AbsenceEleveMotifQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AbsenceEleveMotifQuery) {
			return $criteria;
		}
		$query = new AbsenceEleveMotifQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key.
	 * Propel uses the instance pool to skip the database if the object exists.
	 * Go fast if the query is untouched.
	 *
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    AbsenceEleveMotif|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = AbsenceEleveMotifPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(AbsenceEleveMotifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		if ($this->formatter || $this->modelAlias || $this->with || $this->select
		 || $this->selectColumns || $this->asColumns || $this->selectModifiers
		 || $this->map || $this->having || $this->joins) {
			return $this->findPkComplex($key, $con);
		} else {
			return $this->findPkSimple($key, $con);
		}
	}

	/**
	 * Find object by primary key using raw SQL to go fast.
	 * Bypass doSelect() and the object formatter by using generated code.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    AbsenceEleveMotif A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT ID, NOM, COMMENTAIRE, SORTABLE_RANK, CREATED_AT, UPDATED_AT FROM a_motifs WHERE ID = :p0';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new AbsenceEleveMotif();
			$obj->hydrate($row);
			AbsenceEleveMotifPeer::addInstanceToPool($obj, (string) $key);
		}
		$stmt->closeCursor();

		return $obj;
	}

	/**
	 * Find object by primary key.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    AbsenceEleveMotif|array|mixed the result, formatted by the current formatter
	 */
	protected function findPkComplex($key, $con)
	{
		// As the query uses a PK condition, no limit(1) is necessary.
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKey($key)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKeys($keys)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->format($stmt);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AbsenceEleveMotifPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AbsenceEleveMotifPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterById(1234); // WHERE id = 1234
	 * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
	 * $query->filterById(array('min' => 12)); // WHERE id > 12
	 * </code>
	 *
	 * @param     mixed $id The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AbsenceEleveMotifPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the nom column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
	 * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nom The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function filterByNom($nom = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nom)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nom)) {
				$nom = str_replace('*', '%', $nom);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AbsenceEleveMotifPeer::NOM, $nom, $comparison);
	}

	/**
	 * Filter the query on the commentaire column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
	 * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $commentaire The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function filterByCommentaire($commentaire = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($commentaire)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $commentaire)) {
				$commentaire = str_replace('*', '%', $commentaire);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AbsenceEleveMotifPeer::COMMENTAIRE, $commentaire, $comparison);
	}

	/**
	 * Filter the query on the sortable_rank column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySortableRank(1234); // WHERE sortable_rank = 1234
	 * $query->filterBySortableRank(array(12, 34)); // WHERE sortable_rank IN (12, 34)
	 * $query->filterBySortableRank(array('min' => 12)); // WHERE sortable_rank > 12
	 * </code>
	 *
	 * @param     mixed $sortableRank The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function filterBySortableRank($sortableRank = null, $comparison = null)
	{
		if (is_array($sortableRank)) {
			$useMinMax = false;
			if (isset($sortableRank['min'])) {
				$this->addUsingAlias(AbsenceEleveMotifPeer::SORTABLE_RANK, $sortableRank['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sortableRank['max'])) {
				$this->addUsingAlias(AbsenceEleveMotifPeer::SORTABLE_RANK, $sortableRank['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AbsenceEleveMotifPeer::SORTABLE_RANK, $sortableRank, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
	 * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
	 * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $createdAt The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(AbsenceEleveMotifPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(AbsenceEleveMotifPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AbsenceEleveMotifPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the updated_at column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
	 * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
	 * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $updatedAt The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function filterByUpdatedAt($updatedAt = null, $comparison = null)
	{
		if (is_array($updatedAt)) {
			$useMinMax = false;
			if (isset($updatedAt['min'])) {
				$this->addUsingAlias(AbsenceEleveMotifPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($updatedAt['max'])) {
				$this->addUsingAlias(AbsenceEleveMotifPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AbsenceEleveMotifPeer::UPDATED_AT, $updatedAt, $comparison);
	}

	/**
	 * Filter the query by a related AbsenceEleveTraitement object
	 *
	 * @param     AbsenceEleveTraitement $absenceEleveTraitement  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function filterByAbsenceEleveTraitement($absenceEleveTraitement, $comparison = null)
	{
		if ($absenceEleveTraitement instanceof AbsenceEleveTraitement) {
			return $this
				->addUsingAlias(AbsenceEleveMotifPeer::ID, $absenceEleveTraitement->getAMotifId(), $comparison);
		} elseif ($absenceEleveTraitement instanceof PropelCollection) {
			return $this
				->useAbsenceEleveTraitementQuery()
				->filterByPrimaryKeys($absenceEleveTraitement->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByAbsenceEleveTraitement() only accepts arguments of type AbsenceEleveTraitement or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the AbsenceEleveTraitement relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function joinAbsenceEleveTraitement($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AbsenceEleveTraitement');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'AbsenceEleveTraitement');
		}

		return $this;
	}

	/**
	 * Use the AbsenceEleveTraitement relation AbsenceEleveTraitement object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AbsenceEleveTraitementQuery A secondary query class using the current class as primary query
	 */
	public function useAbsenceEleveTraitementQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinAbsenceEleveTraitement($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AbsenceEleveTraitement', 'AbsenceEleveTraitementQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     AbsenceEleveMotif $absenceEleveMotif Object to remove from the list of results
	 *
	 * @return    AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function prune($absenceEleveMotif = null)
	{
		if ($absenceEleveMotif) {
			$this->addUsingAlias(AbsenceEleveMotifPeer::ID, $absenceEleveMotif->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

	// sortable behavior
	
	/**
	 * Filter the query based on a rank in the list
	 *
	 * @param     integer   $rank rank
	 *
	 * @return    AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function filterByRank($rank)
	{
		return $this
			->addUsingAlias(AbsenceEleveMotifPeer::RANK_COL, $rank, Criteria::EQUAL);
	}
	
	/**
	 * Order the query based on the rank in the list.
	 * Using the default $order, returns the item with the lowest rank first
	 *
	 * @param     string $order either Criteria::ASC (default) or Criteria::DESC
	 *
	 * @return    AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function orderByRank($order = Criteria::ASC)
	{
		$order = strtoupper($order);
		switch ($order) {
			case Criteria::ASC:
				return $this->addAscendingOrderByColumn($this->getAliasedColName(AbsenceEleveMotifPeer::RANK_COL));
				break;
			case Criteria::DESC:
				return $this->addDescendingOrderByColumn($this->getAliasedColName(AbsenceEleveMotifPeer::RANK_COL));
				break;
			default:
				throw new PropelException('AbsenceEleveMotifQuery::orderBy() only accepts "asc" or "desc" as argument');
		}
	}
	
	/**
	 * Get an item from the list based on its rank
	 *
	 * @param     integer   $rank rank
	 * @param     PropelPDO $con optional connection
	 *
	 * @return    AbsenceEleveMotif
	 */
	public function findOneByRank($rank, PropelPDO $con = null)
	{
		return $this
			->filterByRank($rank)
			->findOne($con);
	}
	
	/**
	 * Returns the list of objects
	 *
	 * @param      PropelPDO $con	Connection to use.
	 *
	 * @return     mixed the list of results, formatted by the current formatter
	 */
	public function findList($con = null)
	{
		return $this
			->orderByRank()
			->find($con);
	}
	
	/**
	 * Get the highest rank
	 * 
	 * @param     PropelPDO optional connection
	 *
	 * @return    integer highest position
	 */
	public function getMaxRank(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AbsenceEleveMotifPeer::DATABASE_NAME);
		}
		// shift the objects with a position lower than the one of object
		$this->addSelectColumn('MAX(' . AbsenceEleveMotifPeer::RANK_COL . ')');
		$stmt = $this->doSelect($con);
	
		return $stmt->fetchColumn();
	}
	
	/**
	 * Reorder a set of sortable objects based on a list of id/position
	 * Beware that there is no check made on the positions passed
	 * So incoherent positions will result in an incoherent list
	 *
	 * @param     array     $order id => rank pairs
	 * @param     PropelPDO $con   optional connection
	 *
	 * @return    boolean true if the reordering took place, false if a database problem prevented it
	 */
	public function reorder(array $order, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AbsenceEleveMotifPeer::DATABASE_NAME);
		}
	
		$con->beginTransaction();
		try {
			$ids = array_keys($order);
			$objects = $this->findPks($ids, $con);
			foreach ($objects as $object) {
				$pk = $object->getPrimaryKey();
				if ($object->getSortableRank() != $order[$pk]) {
					$object->setSortableRank($order[$pk]);
					$object->save($con);
				}
			}
			$con->commit();
	
			return true;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	// timestampable behavior
	
	/**
	 * Filter by the latest updated
	 *
	 * @param      int $nbDays Maximum age of the latest update in days
	 *
	 * @return     AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function recentlyUpdated($nbDays = 7)
	{
		return $this->addUsingAlias(AbsenceEleveMotifPeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
	}
	
	/**
	 * Filter by the latest created
	 *
	 * @param      int $nbDays Maximum age of in days
	 *
	 * @return     AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function recentlyCreated($nbDays = 7)
	{
		return $this->addUsingAlias(AbsenceEleveMotifPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
	}
	
	/**
	 * Order by update date desc
	 *
	 * @return     AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function lastUpdatedFirst()
	{
		return $this->addDescendingOrderByColumn(AbsenceEleveMotifPeer::UPDATED_AT);
	}
	
	/**
	 * Order by update date asc
	 *
	 * @return     AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function firstUpdatedFirst()
	{
		return $this->addAscendingOrderByColumn(AbsenceEleveMotifPeer::UPDATED_AT);
	}
	
	/**
	 * Order by create date desc
	 *
	 * @return     AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function lastCreatedFirst()
	{
		return $this->addDescendingOrderByColumn(AbsenceEleveMotifPeer::CREATED_AT);
	}
	
	/**
	 * Order by create date asc
	 *
	 * @return     AbsenceEleveMotifQuery The current query, for fluid interface
	 */
	public function firstCreatedFirst()
	{
		return $this->addAscendingOrderByColumn(AbsenceEleveMotifPeer::CREATED_AT);
	}

} // BaseAbsenceEleveMotifQuery