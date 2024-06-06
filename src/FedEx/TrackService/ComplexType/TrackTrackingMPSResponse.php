<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The response elements for Tracking by Associated Shipment request.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackCompleteTrackResult[] $completeTrackResults
 * @property TrackAlert[] $alerts

 */
class TrackTrackingMPSResponse extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTrackingMPSResponse';

    /**
     * Set completeTrackResults
     *
     * 
     * Example: 
     * @param TrackCompleteTrackResult[] $completeTrackResults
     * @return $this
     */
    public function setCompleteTrackResults(array $completeTrackResults)
    {
        $this->values['completeTrackResults'] = $completeTrackResults;
        return $this;
    }

    /**
     * Get completeTrackResults
     *
     * @return TrackCompleteTrackResult[]
     */
    public function getCompleteTrackResults()
    {
        return $this->values['completeTrackResults'];
    }

    /**
     * Set alerts
     *
     * 
     * Example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     * @param TrackAlert[] $alerts
     * @return $this
     */
    public function setAlerts(array $alerts)
    {
        $this->values['alerts'] = $alerts;
        return $this;
    }

    /**
     * Get alerts
     *
     * @return TrackAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }
}
