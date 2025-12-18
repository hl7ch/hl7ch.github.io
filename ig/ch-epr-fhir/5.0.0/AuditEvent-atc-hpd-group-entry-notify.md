# CH ATC - Audit Event for Group Entry Audit Event Content Profile - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ATC - Audit Event for Group Entry Audit Event Content Profile**

## Example AuditEvent: CH ATC - Audit Event for Group Entry Audit Event Content Profile

10.10.2020 10:05: Healthcare professional Dr. med. Sabine Musterfrau has been added to Group Kardiologie Universitätsspital Musterstadt and patient Jakob Wieder-Gesund has been notified



## Resource Content

```json
{
  "resourceType" : "AuditEvent",
  "id" : "atc-hpd-group-entry-notify",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/HpdAuditEvent"
    ]
  },
  "type" : {
    "system" : "http://dicom.nema.org/resources/ontology/DCM",
    "code" : "110106",
    "display" : "Export"
  },
  "subtype" : [
    {
      "system" : "urn:oid:2.16.756.5.30.1.127.3.10.7",
      "code" : "ATC_HPD_GROUP_ENTRY_NOTIFY",
      "display" : "Entry of healthcare professionals into a group"
    }
  ],
  "action" : "C",
  "recorded" : "2022-10-10T10:05:00Z",
  "outcome" : "0",
  "agent" : [
    {
      "name" : "Notifikations-Dienst",
      "requestor" : false
    }
  ],
  "source" : {
    "observer" : {
      "identifier" : {
        "system" : "urn:ietf:rfc:3986",
        "value" : "urn:oid:7.8.9.10.11"
      }
    }
  },
  "entity" : [
    {
      "what" : {
        "identifier" : {
          "system" : "urn:oid:2.16.756.5.30.1.127.3.10.3",
          "value" : "761337610469261945"
        }
      },
      "type" : {
        "system" : "http://terminology.hl7.org/CodeSystem/audit-entity-type",
        "code" : "1",
        "display" : "Person"
      },
      "role" : {
        "system" : "http://terminology.hl7.org/CodeSystem/object-role",
        "code" : "1",
        "display" : "Patient"
      }
    },
    {
      "what" : {
        "identifier" : {
          "system" : "urn:oid:2.51.1.3",
          "value" : "7601000050717"
        }
      },
      "type" : {
        "system" : "http://terminology.hl7.org/CodeSystem/audit-entity-type",
        "code" : "1",
        "display" : "Person"
      },
      "role" : {
        "system" : "urn:oid:2.16.756.5.30.1.127.3.10.6",
        "code" : "HCP",
        "display" : "Healthcare professional"
      },
      "name" : "Dr. med. Sabine Musterfrau"
    },
    {
      "what" : {
        "identifier" : {
          "value" : "urn:oid:1.1.1.1.1"
        }
      },
      "type" : {
        "system" : "http://terminology.hl7.org/CodeSystem/audit-entity-type",
        "code" : "3",
        "display" : "Organization"
      },
      "role" : {
        "system" : "urn:oid:2.16.756.5.30.1.127.3.10.14",
        "code" : "GRP",
        "display" : "Group"
      },
      "name" : "Kardiologie Universitätsspital Musterstadt"
    },
    {
      "what" : {
        "identifier" : {
          "value" : "00-0af7651916cd43dd8448eb211c80319c-b7ad6b7169203331-00"
        }
      },
      "type" : {
        "system" : "http://terminology.hl7.org/CodeSystem/audit-entity-type",
        "code" : "4",
        "display" : "Other"
      },
      "role" : {
        "system" : "http://terminology.hl7.org/CodeSystem/object-role",
        "code" : "26",
        "display" : "Processing Element"
      }
    }
  ]
}

```
