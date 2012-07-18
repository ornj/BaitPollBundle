<?php

/*
 * This file is part of the BaitPollBundle package.
 *
 * (c) BAIT s.r.o. <http://www.bait.sk/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bait\PollBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Bait\PollBundle\Model\Vote as VoteModel;

/**
 * Base Vote ORM entity
 *
 * @author Ondrej Slintak <ondrowan@gmail.com>
 *
 * @ORM\MappedSuperclass
 */
abstract class Vote extends VoteModel
{
    /**
     * @ORM\Column(name="answer", type="text")
     */
    protected $answer;

    /**
     * @ORM\Column(name="client_ip", type="string", length="39")
     */
    protected $clientIp;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;
}
