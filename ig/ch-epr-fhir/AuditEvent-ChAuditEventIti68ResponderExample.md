# Example of audit event for an [ITI-68] transaction at Responder - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of audit event for an [ITI-68] transaction at Responder**

## Example AuditEvent: Example of audit event for an [ITI-68] transaction at Responder

Profile: [CH Audit Event for [ITI-68] Document Responder](StructureDefinition-ChAuditEventIti68Responder.md)

**type**: [Audit Event ID: rest](http://terminology.hl7.org/7.0.1/CodeSystem-audit-event-type.html#audit-event-type-rest) (RESTful Operation)

**subtype**: [FHIR Restful Interactions: read](http://hl7.org/fhir/R4/codesystem-restful-interaction.html#restful-interaction-read) (read), unknown: ITI-68 (Retrieve Document)

**recorded**: 2024-10-28 09:43:56+0000

**outcome**: Success

> **agent****type**:Source Role ID**who**: Community A**requestor**: false

### Networks

| | | |
| :--- | :--- | :--- |
| - | **Address** | **Type** |
| * | https://example.org/blah/blah.pdf | URI |


> **agent****type**:Destination Role ID**who**: My e-Health App**requestor**: false

### Networks

| | | |
| :--- | :--- | :--- |
| - | **Address** | **Type** |
| * | 192.168.1.1 | IP Address |


> **agent****type**:responsible party**role**:Healthcare professional**altId**: 2000000090092**name**: Martina Musterarzt**requestor**: true**purposeOfUse**:Normal Access

### Sources

| | | |
| :--- | :--- | :--- |
| - | **Site** | **Observer** |
| * | 2.16.756.4.5.6 | Community A |

> **entity****what**: Identifier: 00-0af7651916cd43dd8448eb211c80319c-b7ad6b7169203331-00**type**:[Audit event entity type: 4](http://terminology.hl7.org/7.0.1/CodeSystem-audit-entity-type.html#audit-entity-type-4)(Other)**role**:[AuditEventEntityRole: 26](http://terminology.hl7.org/7.0.1/CodeSystem-object-role.html#object-role-26)(Processing Element)

> **entity****what**: Identifier:`urn:oid:2.16.756.5.30.1.127.3.10.3`/761337610411353650**type**:[Audit event entity type: 1](http://terminology.hl7.org/7.0.1/CodeSystem-audit-entity-type.html#audit-entity-type-1)(Person)**role**:[AuditEventEntityRole: 1](http://terminology.hl7.org/7.0.1/CodeSystem-object-role.html#object-role-1)(Patient)

> **entity****what**:[https://example.org/blah/blah.pdf](https://example.org/blah/blah.pdf)**type**:[Audit event entity type: 2](http://terminology.hl7.org/7.0.1/CodeSystem-audit-entity-type.html#audit-entity-type-2)(System Object)**role**:[AuditEventEntityRole: 3](http://terminology.hl7.org/7.0.1/CodeSystem-object-role.html#object-role-3)(Report)



## Resource Content

```json
{
  "resourceType" : "AuditEvent",
  "id" : "ChAuditEventIti68ResponderExample",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti68Responder"
    ]
  },
  "type" : {
    "system" : "http://terminology.hl7.org/CodeSystem/audit-event-type",
    "code" : "rest"
  },
  "subtype" : [
    {
      "system" : "http://hl7.org/fhir/restful-interaction",
      "code" : "read",
      "display" : "read"
    },
    {
      "system" : "urn:ihe:event-type-code",
      "code" : "ITI-68",
      "display" : "Retrieve Document"
    }
  ],
  "recorded" : "2024-10-28T09:43:56Z",
  "outcome" : "0",
  "agent" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://dicom.nema.org/resources/ontology/DCM",
            "code" : "110153",
            "display" : "Source Role ID"
          }
        ]
      },
      "who" : {
        "display" : "Community A"
      },
      "requestor" : false,
      "network" : {
        "address" : "https://example.org/blah/blah.pdf",
        "type" : "5"
      }
    },
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://dicom.nema.org/resources/ontology/DCM",
            "code" : "110152",
            "display" : "Destination Role ID"
          }
        ]
      },
      "who" : {
        "display" : "My e-Health App"
      },
      "requestor" : false,
      "network" : {
        "address" : "192.168.1.1",
        "type" : "2"
      }
    },
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v3-ParticipationType",
            "code" : "RESP",
            "display" : "responsible party"
          }
        ]
      },
      "role" : [
        {
          "coding" : [
            {
              "system" : "urn:oid:2.16.756.5.30.1.127.3.10.6",
              "code" : "HCP"
            }
          ]
        }
      ],
      "altId" : "2000000090092",
      "name" : "Martina Musterarzt",
      "requestor" : true,
      "purposeOfUse" : [
        {
          "coding" : [
            {
              "system" : "urn:oid:2.16.756.5.30.1.127.3.10.5",
              "code" : "NORM",
              "display" : "Normal Access"
            }
          ]
        }
      ]
    }
  ],
  "source" : {
    "site" : "2.16.756.4.5.6",
    "observer" : {
      "display" : "Community A"
    }
  },
  "entity" : [
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
    },
    {
      "what" : {
        "identifier" : {
          "system" : "urn:oid:2.16.756.5.30.1.127.3.10.3",
          "value" : "761337610411353650"
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
        "reference" : "https://example.org/blah/blah.pdf"
      },
      "type" : {
        "system" : "http://terminology.hl7.org/CodeSystem/audit-entity-type",
        "code" : "2",
        "display" : "System Object"
      },
      "role" : {
        "system" : "http://terminology.hl7.org/CodeSystem/object-role",
        "code" : "3",
        "display" : "Report"
      }
    }
  ]
}

```
