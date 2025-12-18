# CH ATC - Access of Audit Trail Repository - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ATC - Access of Audit Trail Repository**

## Example AuditEvent: CH ATC - Access of Audit Trail Repository

Jakob Wieder-Gesund accessed the audit trail 22.09.2020 10:47



## Resource Content

```json
{
  "resourceType" : "AuditEvent",
  "id" : "atc-log-read",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/AccessAuditTrailEvent"
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
      "code" : "ATC_LOG_READ",
      "display" : "Accessing the Patient Audit Record Repository"
    }
  ],
  "action" : "C",
  "recorded" : "2020-09-22T08:47:00Z",
  "outcome" : "0",
  "agent" : [
    {
      "role" : [
        {
          "coding" : [
            {
              "system" : "urn:oid:2.16.756.5.30.1.127.3.10.6",
              "code" : "PAT",
              "display" : "Patient"
            }
          ]
        }
      ],
      "name" : "Jakob Wieder-Gesund",
      "requestor" : true
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
