<?php

namespace ChatGenius;

use GuzzleHttp\Client;

class Telegram{
    private $base_url = 'https://api.telegram.org/';
    public $data = [];
    protected $token;
    public function __construct($token) {
        $this->token = $token;
    }
    public function request($useFileUrl = false) {
        $baseUrl = $useFileUrl ? $this->base_url . 'file/bot' : $this->base_url . 'bot';
        return new Client(['base_uri' => $baseUrl . $this->token . '/']);
    }
    public function NullData() {
        foreach($this->data as $key => $value) {
            if ($key != 'response') {
                unset($this->data[$key]);
            }
        }
        return $this;
    }
    
    public function getData(): array {
        return $this->data;
    }
    /* Values ​​that are boolen */
    public function ActiveWaitingList ($value = false){
        $this->data['activewaitinglist'] = $value;
        return $this;
    }
    public function InviteLink ($value = false){
        $this->data['invitelink'] = $value;
        return $this;
    }
    public function Notification($value = false){
        $this->data['Notification'] = $value;
        return $this;
    }
    public function Protect($value = false){
        $this->data['Protect'] = $value;
        return $this;
    }
    public function Spoiler ($value = false){
        $this->data['spoiler'] = $value;
        return $this;
    }
    public function Streaming ($value = false){
        $this->data['streaming'] = $value;
        return $this;
    }
    public function RemoveCaption ($value = false){
        $this->data['removecaption'] = $value;
        return $this;
    }
    public function DisableContentTypeDetection ($value = false){
        $this->data['disablecontenttypedetection'] = $value;
        return $this;
    }
    /* Values ​​that are boolen */

    /* Values ​​linked to classes */
    public function Entities(Entities $entities): self {
        $this->data['entities'] = $entities->toArray();
        return $this;
    }
    public function User(User $user): self{
        $this->data['user'] = $user->toArray();
        return $this;
    }
    public function LinkPreviewOptions(LinkPreviewOptions $linkPreviewOptions): self {
        $this->data['LinkPreviewOptions'] = $linkPreviewOptions->toArray();
        return $this;
    }
    
    public function Reply(Reply $reply): self {
        $this->data['reply'] = json_encode($reply->toArray());
        return $this;
    }
    public function ReplyMarkup(Keyboard $keyboard): self {
        $this->data['replymarkup'] = json_encode($keyboard->toArray());
        return $this;
    }
    /* Values ​​linked to classes */

    /* The values ​​used in the telegram action class */
    public function ChatID ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Chat ID not found',
                    code: 1001,
                    statusCode: 404
                );
            }
            $this->data['chat_id'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    
    }
    public function Text ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Text not found',
                    code: 1002,
                    statusCode: 404
                );
            }
            $this->data['text'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Thread ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Thread value not provided',
                    code: 1003,
                    statusCode: 404
                );
            }
            $this->data['thread'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function ParseType ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Parse not provided',
                    code: 1004,
                    statusCode: 404
                );
            }
            $this->data['parse'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function FromChatID ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'FromChatID not provided',
                    code: 1006,
                    statusCode: 404
                );
            }
            $this->data['fromchatid'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function MessageId ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'MessageId not provided',
                    code: 1007,
                    statusCode: 404
                );
            }
            $this->data['messageid'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function MessageIds ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'MessageIds not provided',
                    code: 1008,
                    statusCode: 404
                );
            }
            $this->data['messageids'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Caption ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Caption not provided',
                    code: 1009,
                    statusCode: 404
                );
            }
            $this->data['caption'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function CaptionEntities ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'CaptionEntities not provided',
                    code: 1010,
                    statusCode: 404
                );
            }
            $this->data['captionentities'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Audio ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Audio not provided',
                    code: 1011,
                    statusCode: 404
                );
            }
            $this->data['audio'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Duration ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Audio not provided',
                    code: 1012,
                    statusCode: 404
                );
            }
            $this->data['duration'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Performer ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Performer not provided',
                    code: 1013,
                    statusCode: 404
                );
            }
            $this->data['performer'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Title ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Title not provided',
                    code: 1014,
                    statusCode: 404
                );
            }
            $this->data['title'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Thumbnail ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Thumbnail not provided',
                    code: 1015,
                    statusCode: 404
                );
            }
            $this->data['thumbnail'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Document ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Document not provided',
                    code: 1016,
                    statusCode: 404
                );
            }
            $this->data['document'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Video ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Video not provided',
                    code: 1017,
                    statusCode: 404
                );
            }
            $this->data['video'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Photo ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Video not provided',
                    code: 1017,
                    statusCode: 404
                );
            }
            $this->data['photo'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Width ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Width not provided',
                    code: 1018,
                    statusCode: 404
                );
            }
            $this->data['width'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Height ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Height not provided',
                    code: 1018,
                    statusCode: 404
                );
            }
            $this->data['height'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function VideoNote ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Video Note not provided',
                    code: 1019,
                    statusCode: 404
                );
            }
            $this->data['videonote'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Length ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Length not provided',
                    code: 1020,
                    statusCode: 404
                );
            }
            $this->data['length'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Animation ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Animation not provided',
                    code: 1021,
                    statusCode: 404
                );
            }
            $this->data['animation'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Voice ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Voice not provided',
                    code: 1022,
                    statusCode: 404
                );
            }
            $this->data['voice'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Media ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Media not provided',
                    code: 1023,
                    statusCode: 404
                );
            }
            $this->data['media'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Latitude ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Latitude not provided',
                    code: 1024,
                    statusCode: 404
                );
            }
            $this->data['latitude'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Longitude ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Longitude not provided',
                    code: 1025,
                    statusCode: 404
                );
            }
            $this->data['longitude'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function HorizontalAccuracy ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Horizontal Accuracy not provided',
                    code: 1026,
                    statusCode: 404
                );
            }
            $this->data['horizontalaccuracy'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function LivePeriod ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'LivePeriod not provided',
                    code: 1027,
                    statusCode: 404
                );
            }
            $this->data['liveperiod'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Heading ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Heading not provided',
                    code: 1028,
                    statusCode: 404
                );
            }
            $this->data['heading'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function ProximityAlertRadius ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'ProximityAlertRadius not provided',
                    code: 1029,
                    statusCode: 404
                );
            }
            $this->data['proximityalertradius'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Address ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Address not provided',
                    code: 1030,
                    statusCode: 404
                );
            }
            $this->data['address'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function FoursquareID ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Foursquare ID not provided',
                    code: 1031,
                    statusCode: 404
                );
            }
            $this->data['foursquareid'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function FoursquaretType ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Foursquaret Type not provided',
                    code: 1032,
                    statusCode: 404
                );
            }
            $this->data['foursquaretype'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function GooglePlaceID ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Google Place ID Type not provided',
                    code: 1033,
                    statusCode: 404
                );
            }
            $this->data['googleplaceid'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function GooglePlaceType ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Google Place Type not provided',
                    code: 1034,
                    statusCode: 404
                );
            }
            $this->data['googleplacetype'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function PhoneNumber ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'PhoneNumber not provided',
                    code: 1035,
                    statusCode: 404
                );
            }
            $this->data['phonenumber'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function FirstName ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'FirstName not provided',
                    code: 1036,
                    statusCode: 404
                );
            }
            $this->data['firstname'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function LastName ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'LastName not provided',
                    code: 1037,
                    statusCode: 404
                );
            }
            $this->data['lastname'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function VCard ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'VCard not provided',
                    code: 1038,
                    statusCode: 404
                );
            }
            $this->data['vcard'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Action ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Action not provided',
                    code: 1039,
                    statusCode: 404
                );
            }
            $this->data['action'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function UserID ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'USer ID not provided',
                    code: 1040,
                    statusCode: 404
                );
            }
            $this->data['userid'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function FilePath ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'FilePath not provided',
                    code: 1041,
                    statusCode: 404
                );
            }
            $this->data['filepath'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Name ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Name not provided',
                    code: 1042,
                    statusCode: 404
                );
            }
            $this->data['name'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function ExpireDay ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'ExpireDay not provided',
                    code: 1043,
                    statusCode: 404
                );
            }
            $this->data['expireday'] = ($value * 86400) + time();
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function TotalMember ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'TotalMember not provided',
                    code: 1044,
                    statusCode: 404
                );
            }
            $this->data['totalmember'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Offset ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Offset not provided',
                    code: 1045,
                    statusCode: 404
                );
            }
            $this->data['offset'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Limit ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Limit not provided',
                    code: 1046,
                    statusCode: 404
                );
            }
            $this->data['limit'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Timeout ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Timeout not provided',
                    code: 1047,
                    statusCode: 404
                );
            }
            $this->data['timeout'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function Certificate ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'Certificate not provided',
                    code: 1048,
                    statusCode: 404
                );
            }
            $this->data['certificate'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function IpAddress ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'IpAddress not provided',
                    code: 1049,
                    statusCode: 404
                );
            }
            $this->data['ipaddress'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function MaxConnections ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'MaxConnections not provided',
                    code: 1050,
                    statusCode: 404
                );
            }
            $this->data['maxconnections'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function AllowedUpdates ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'AllowedUpdates not provided',
                    code: 1051,
                    statusCode: 404
                );
            }
            $this->data['allowedupdates'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function DropPending ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'DropPending not provided',
                    code: 1052,
                    statusCode: 404
                );
            }
            $this->data['droppending'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function SecretToken ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'SecretToken not provided',
                    code: 1053,
                    statusCode: 404
                );
            }
            $this->data['secrettoken'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    public function InlineMessageID ($value = null){
        try{
            if(!$value) {
                throw new Exception(
                    message: 'InlineMessageID not provided',
                    code: 1054,
                    statusCode: 404
                );
            }
            $this->data['inlinemessageid'] = $value;
            return $this;
        }catch(Exception $e) {
            echo $e->result();
        }
    }
    /* The values ​​used in the telegram action class */
}
