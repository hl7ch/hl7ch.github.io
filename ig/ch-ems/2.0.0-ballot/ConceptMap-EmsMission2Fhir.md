# EMS Mission to FHIR Mapping - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMS Mission to FHIR Mapping**

## ConceptMap: EMS Mission to FHIR Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ConceptMap/EmsMission2Fhir | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:EmsMission2Fhir |
| **Copyright/Legal**: CC0-1.0 | |

 
This map shows how the mission section from the EMS Protocol is represented using FHIR. 

Mapping from (not specified) to (not specified)

**Group 1 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Composition](StructureDefinition-ch-ems-composition.md)

* **Source Code**: [EMSProtocol.mission](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.section:mission](StructureDefinition-ch-ems-composition-definitions.md#Composition.section:mission)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.respondingOrganisation](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.respondingOrganisation)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Composition.custodian](StructureDefinition-ch-ems-composition-definitions.md#Composition.custodian)
  * **Card.**: 1..1
  * **Type**: todo

-------

**Group 2 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Encounter](StructureDefinition-ch-ems-encounter.md)

* **Source Code**: [EMSProtocol.mission.date](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.date)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.period.start](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.period.start)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.number](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.number)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.identifier:missionNumber](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.identifier:missionNumber)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.type](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.type)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.serviceType](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.serviceType)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.transportReason](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.transportReason)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.reasonCode](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.reasonCode)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.urgency](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.urgency)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.priority](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.priority)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.urgency.adequacy](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.urgency.adequacy)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.priority.extension:urgencyAdequate](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.priority.extension:urgencyAdequate)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.requestingOrganisation](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.requestingOrganisation)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.basedOn](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.basedOn)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.respondingOrganisation.team.member](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.respondingOrganisation.team.member)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.participant.individual](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.participant.individual)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.respondingOrganisation.team.member.role](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.respondingOrganisation.team.member.role)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.participant.extension:teamRole](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.participant.extension:teamRole)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.location](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.location)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.location.location](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.location.location)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.destination](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.destination)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.hospitalization.destination](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.hospitalization.destination)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.valuablesPatient](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.valuablesPatient)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.extension:valuablesPatient](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.extension:valuablesPatient)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.emergencyDoctorSystem](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.emergencyDoctorSystem)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.extension:emergencyDoctorSystem](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.extension:emergencyDoctorSystem)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.violence.offender](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.violence.offender)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.extension:violence.extension:offender](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.extension:violence.extension:offender)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.violence.form](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.violence.form)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.extension:violence.extension:form](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.extension:violence.extension:form)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.violence.result](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.violence.result)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Encounter.extension:violence.extension:result](StructureDefinition-ch-ems-encounter-definitions.md#Encounter.extension:violence.extension:result)
  * **Card.**: 0..*
  * **Type**: todo

-------

**Group 3 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS ServiceRequest](StructureDefinition-ch-ems-servicerequest.md)

* **Source Code**: [EMSProtocol.mission.requestingOrganisation](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.requestingOrganisation)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [ServiceRequest.requester](StructureDefinition-ch-ems-servicerequest-definitions.md#ServiceRequest.requester)
  * **Card.**: 1..1
  * **Type**: todo

-------

**Group 4 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Organization](StructureDefinition-ch-ems-organization.md)

* **Source Code**: [EMSProtocol.mission.requestingOrganisation.name](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.requestingOrganisation.name)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Organization.name](StructureDefinition-ch-ems-organization-definitions.md#Organization.name)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.requestingOrganisation.gln](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.requestingOrganisation.gln)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Organization.identifier:GLN](StructureDefinition-ch-ems-organization-definitions.md#Organization.identifier:GLN)
  * **Card.**: 1..1
  * **Type**: todo

-------

**Group 5 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Organization](StructureDefinition-ch-ems-organization.md)

* **Source Code**: [EMSProtocol.mission.respondingOrganisation.name](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.respondingOrganisation.name)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Organization.name](StructureDefinition-ch-ems-organization-definitions.md#Organization.name)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.respondingOrganisation.gln](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.respondingOrganisation.gln)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Organization.identifier:GLN](StructureDefinition-ch-ems-organization-definitions.md#Organization.identifier:GLN)
  * **Card.**: 1..1
  * **Type**: todo

-------

**Group 6 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Organization](StructureDefinition-ch-ems-organization.md)

* **Source Code**: [EMSProtocol.mission.respondingOrganisation.team.name](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.respondingOrganisation.team.name)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Organization.name](StructureDefinition-ch-ems-organization-definitions.md#Organization.name)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.respondingOrganisation.team.gln](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.respondingOrganisation.team.gln)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Organization.identifier:GLN](StructureDefinition-ch-ems-organization-definitions.md#Organization.identifier:GLN)
  * **Card.**: 1..1
  * **Type**: todo

-------

**Group 7 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Practitioner](StructureDefinition-ch-ems-practitioner.md)

* **Source Code**: [EMSProtocol.mission.respondingOrganisation.team.member.name](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.respondingOrganisation.team.member.name)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Practitioner.name](StructureDefinition-ch-ems-practitioner-definitions.md#Practitioner.name)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.respondingOrganisation.team.member.name.firstName](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.respondingOrganisation.team.member.name.firstName)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Practitioner.name.given](StructureDefinition-ch-ems-practitioner-definitions.md#Practitioner.name.given)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.respondingOrganisation.team.member.name.lastName](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.respondingOrganisation.team.member.name.lastName)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Practitioner.name.family](StructureDefinition-ch-ems-practitioner-definitions.md#Practitioner.name.family)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.respondingOrganisation.team.member.gln](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.respondingOrganisation.team.member.gln)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Practitioner.identifier:GLN](StructureDefinition-ch-ems-practitioner-definitions.md#Practitioner.identifier:GLN)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.respondingOrganisation.team](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.respondingOrganisation.team)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Practitioner.identifier:GLN.assigner](StructureDefinition-ch-ems-practitioner-definitions.md#Practitioner.identifier:GLN.assigner)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.respondingOrganisation.team.member.formation](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.respondingOrganisation.team.member.formation)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Practitioner.qualification.code](StructureDefinition-ch-ems-practitioner-definitions.md#Practitioner.qualification.code)
  * **Card.**: 1..1
  * **Type**: todo

-------

**Group 8 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Location: Location and Destination](StructureDefinition-ch-ems-location-locationdestination.md)

* **Source Code**: [EMSProtocol.mission.location.address](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.location.address)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.address](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.address)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.location.address.street](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.location.address.street)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.address.line](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.address.line)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.location.address.zipCode](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.location.address.zipCode)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.address.postalCode](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.address.postalCode)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.location.address.city](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.location.address.city)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.address.city](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.address.city)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.location.position](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.location.position)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.position](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.position)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.location.position.longitude](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.location.position.longitude)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.position.longitude](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.position.longitude)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.location.position.latitude](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.location.position.latitude)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.position.latitude](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.position.latitude)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.location.name](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.location.name)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.name](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.name)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.location.type](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.location.type)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.physicalType](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.physicalType)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 9 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Location: Location and Destination](StructureDefinition-ch-ems-location-locationdestination.md)

* **Source Code**: [EMSProtocol.mission.destination.address](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.destination.address)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.address](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.address)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.destination.address.street](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.destination.address.street)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.address.line](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.address.line)
  * **Card.**: 0..*
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.destination.address.zipCode](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.destination.address.zipCode)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.address.postalCode](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.address.postalCode)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.destination.address.city](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.destination.address.city)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.address.city](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.address.city)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.destination.position](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.destination.position)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.position](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.position)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.destination.position.longitude](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.destination.position.longitude)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.position.longitude](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.position.longitude)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.destination.position.latitude](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.destination.position.latitude)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.position.latitude](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.position.latitude)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.destination.name](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.destination.name)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.name](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.name)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.destination.type](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.destination.type)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.physicalType](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.physicalType)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.destination.gln](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.destination.gln)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.identifier:GLN](StructureDefinition-ch-ems-location-locationdestination-definitions.md#Location.identifier:GLN)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 10 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Observation: Mission Time Status](StructureDefinition-ch-ems-observation-missiontimestatus.md)

* **Source Code**: [EMSProtocol.mission.statusTime.time](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.statusTime.time)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.value[x]](StructureDefinition-ch-ems-observation-missiontimestatus-definitions.md#Observation.value[x])
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.statusTime.meaning](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.statusTime.meaning)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Observation.code](StructureDefinition-ch-ems-observation-missiontimestatus-definitions.md#Observation.code)
  * **Card.**: 1..1
  * **Type**: todo

-------

**Group 11 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Procedure: Precautions Infection](StructureDefinition-ch-ems-procedure-precautionsinfection.md)

* **Source Code**: [EMSProtocol.mission.precautionsInfection](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.precautionsInfection)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Procedure.code](StructureDefinition-ch-ems-procedure-precautionsinfection-definitions.md#Procedure.code)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 12 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Procedure: Transportation](StructureDefinition-ch-ems-procedure-transportation.md)

* **Source Code**: [EMSProtocol.mission.transportation.bedding](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.transportation.bedding)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Procedure.code](StructureDefinition-ch-ems-procedure-transportation-definitions.md#Procedure.code)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.transportation.recoveryAid](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.transportation.recoveryAid)
  * **Card.**: 0..*
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Procedure.usedCode](StructureDefinition-ch-ems-procedure-transportation-definitions.md#Procedure.usedCode)
  * **Card.**: 0..*
  * **Type**: todo

-------

**Group 13 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Location: Ambulance](StructureDefinition-ch-ems-location-ambulance.md)

* **Source Code**: [EMSProtocol.mission.ambulance.type](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.ambulance.type)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.physicalType](StructureDefinition-ch-ems-location-ambulance-definitions.md#Location.physicalType)
  * **Card.**: 0..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.ambulance.disinfection](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.ambulance.disinfection)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Location.extension:disinfection](StructureDefinition-ch-ems-location-ambulance-definitions.md#Location.extension:disinfection)
  * **Card.**: 0..1
  * **Type**: todo

-------

**Group 14 **Mapping from [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md) to [CH EMS Device](StructureDefinition-ch-ems-device.md)

* **Source Code**: [EMSProtocol.mission.device.name](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.device.name)
  * **Card.**: 1..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Device.deviceName.name](StructureDefinition-ch-ems-device-definitions.md#Device.deviceName.name)
  * **Card.**: 1..1
  * **Type**: todo
* **Source Code**: [EMSProtocol.mission.device.owner](StructureDefinition-logicalmodel-ems-protocol.md#EMSProtocol.mission.device.owner)
  * **Card.**: 0..1
  * **Type**: todo
  * **Relationship**: [is equivalent to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#equivalent)
  * **Target Code**: [Device.extension:owner](StructureDefinition-ch-ems-device-definitions.md#Device.extension:owner)
  * **Card.**: 0..1
  * **Type**: todo



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "EmsMission2Fhir",
  "url" : "http://fhir.ch/ig/ch-ems/ConceptMap/EmsMission2Fhir",
  "version" : "2.0.0-ballot",
  "name" : "EmsMission2Fhir",
  "title" : "EMS Mission to FHIR Mapping",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-15T08:00:21+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "This map shows how the mission section from the EMS Protocol is represented using FHIR.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "group" : [{
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-composition",
    "element" : [{
      "code" : "EMSProtocol.mission",
      "target" : [{
        "code" : "Composition.section:mission",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.respondingOrganisation",
      "target" : [{
        "code" : "Composition.custodian",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-encounter",
    "element" : [{
      "code" : "EMSProtocol.mission.date",
      "target" : [{
        "code" : "Encounter.period.start",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.number",
      "target" : [{
        "code" : "Encounter.identifier:missionNumber",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.type",
      "target" : [{
        "code" : "Encounter.serviceType",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.transportReason",
      "target" : [{
        "code" : "Encounter.reasonCode",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.urgency",
      "target" : [{
        "code" : "Encounter.priority",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.urgency.adequacy",
      "target" : [{
        "code" : "Encounter.priority.extension:urgencyAdequate",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.requestingOrganisation",
      "target" : [{
        "code" : "Encounter.basedOn",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.respondingOrganisation.team.member",
      "target" : [{
        "code" : "Encounter.participant.individual",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.respondingOrganisation.team.member.role",
      "target" : [{
        "code" : "Encounter.participant.extension:teamRole",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.location",
      "target" : [{
        "code" : "Encounter.location.location",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.destination",
      "target" : [{
        "code" : "Encounter.hospitalization.destination",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.valuablesPatient",
      "target" : [{
        "code" : "Encounter.extension:valuablesPatient",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.emergencyDoctorSystem",
      "target" : [{
        "code" : "Encounter.extension:emergencyDoctorSystem",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.violence.offender",
      "target" : [{
        "code" : "Encounter.extension:violence.extension:offender",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.violence.form",
      "target" : [{
        "code" : "Encounter.extension:violence.extension:form",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.violence.result",
      "target" : [{
        "code" : "Encounter.extension:violence.extension:result",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-servicerequest",
    "element" : [{
      "code" : "EMSProtocol.mission.requestingOrganisation",
      "target" : [{
        "code" : "ServiceRequest.requester",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-organization",
    "element" : [{
      "code" : "EMSProtocol.mission.requestingOrganisation.name",
      "target" : [{
        "code" : "Organization.name",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.requestingOrganisation.gln",
      "target" : [{
        "code" : "Organization.identifier:GLN",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-organization",
    "element" : [{
      "code" : "EMSProtocol.mission.respondingOrganisation.name",
      "target" : [{
        "code" : "Organization.name",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.respondingOrganisation.gln",
      "target" : [{
        "code" : "Organization.identifier:GLN",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-organization",
    "element" : [{
      "code" : "EMSProtocol.mission.respondingOrganisation.team.name",
      "target" : [{
        "code" : "Organization.name",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.respondingOrganisation.team.gln",
      "target" : [{
        "code" : "Organization.identifier:GLN",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-practitioner",
    "element" : [{
      "code" : "EMSProtocol.mission.respondingOrganisation.team.member.name",
      "target" : [{
        "code" : "Practitioner.name",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.respondingOrganisation.team.member.name.firstName",
      "target" : [{
        "code" : "Practitioner.name.given",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.respondingOrganisation.team.member.name.lastName",
      "target" : [{
        "code" : "Practitioner.name.family",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.respondingOrganisation.team.member.gln",
      "target" : [{
        "code" : "Practitioner.identifier:GLN",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.respondingOrganisation.team",
      "target" : [{
        "code" : "Practitioner.identifier:GLN.assigner",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.respondingOrganisation.team.member.formation",
      "target" : [{
        "code" : "Practitioner.qualification.code",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-location-locationdestination",
    "element" : [{
      "code" : "EMSProtocol.mission.location.address",
      "target" : [{
        "code" : "Location.address",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.location.address.street",
      "target" : [{
        "code" : "Location.address.line",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.location.address.zipCode",
      "target" : [{
        "code" : "Location.address.postalCode",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.location.address.city",
      "target" : [{
        "code" : "Location.address.city",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.location.position",
      "target" : [{
        "code" : "Location.position",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.location.position.longitude",
      "target" : [{
        "code" : "Location.position.longitude",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.location.position.latitude",
      "target" : [{
        "code" : "Location.position.latitude",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.location.name",
      "target" : [{
        "code" : "Location.name",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.location.type",
      "target" : [{
        "code" : "Location.physicalType",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-location-locationdestination",
    "element" : [{
      "code" : "EMSProtocol.mission.destination.address",
      "target" : [{
        "code" : "Location.address",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.destination.address.street",
      "target" : [{
        "code" : "Location.address.line",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.destination.address.zipCode",
      "target" : [{
        "code" : "Location.address.postalCode",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.destination.address.city",
      "target" : [{
        "code" : "Location.address.city",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.destination.position",
      "target" : [{
        "code" : "Location.position",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.destination.position.longitude",
      "target" : [{
        "code" : "Location.position.longitude",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.destination.position.latitude",
      "target" : [{
        "code" : "Location.position.latitude",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.destination.name",
      "target" : [{
        "code" : "Location.name",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.destination.type",
      "target" : [{
        "code" : "Location.physicalType",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.destination.gln",
      "target" : [{
        "code" : "Location.identifier:GLN",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-observation-missiontimestatus",
    "element" : [{
      "code" : "EMSProtocol.mission.statusTime.time",
      "target" : [{
        "code" : "Observation.value[x]",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.statusTime.meaning",
      "target" : [{
        "code" : "Observation.code",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure-precautionsinfection",
    "element" : [{
      "code" : "EMSProtocol.mission.precautionsInfection",
      "target" : [{
        "code" : "Procedure.code",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-procedure-transportation",
    "element" : [{
      "code" : "EMSProtocol.mission.transportation.bedding",
      "target" : [{
        "code" : "Procedure.code",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.transportation.recoveryAid",
      "target" : [{
        "code" : "Procedure.usedCode",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-location-ambulance",
    "element" : [{
      "code" : "EMSProtocol.mission.ambulance.type",
      "target" : [{
        "code" : "Location.physicalType",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.ambulance.disinfection",
      "target" : [{
        "code" : "Location.extension:disinfection",
        "equivalence" : "equivalent"
      }]
    }]
  },
  {
    "source" : "http://fhir.ch/ig/ch-ems/StructureDefinition/logicalmodel-ems-protocol",
    "target" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-device",
    "element" : [{
      "code" : "EMSProtocol.mission.device.name",
      "target" : [{
        "code" : "Device.deviceName.name",
        "equivalence" : "equivalent"
      }]
    },
    {
      "code" : "EMSProtocol.mission.device.owner",
      "target" : [{
        "code" : "Device.extension:owner",
        "equivalence" : "equivalent"
      }]
    }]
  }]
}

```
