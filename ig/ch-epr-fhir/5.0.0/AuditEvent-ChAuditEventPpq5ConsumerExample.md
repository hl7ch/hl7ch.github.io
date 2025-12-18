# Example of audit event for a [PPQ-5] transaction at Consumer - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of audit event for a [PPQ-5] transaction at Consumer**

## Example AuditEvent: Example of audit event for a [PPQ-5] transaction at Consumer

Profile: [CH Audit Event for [PPQ-5] Policy Consumer](StructureDefinition-ChAuditEventPpq5Consumer.md)

**type**: [Audit Event ID: rest](http://terminology.hl7.org/7.0.1/CodeSystem-audit-event-type.html#audit-event-type-rest) (Restful Operation)

**subtype**: unknown: PPQ-5 (Mobile Privacy Policy Retrieve), [FHIR Restful Interactions: search](http://hl7.org/fhir/R4/codesystem-restful-interaction.html#restful-interaction-search) (search)

**recorded**: 2024-10-28 09:43:56+0000

**outcome**: Success

> **agent****type**:responsible party**role**:Healthcare professional**altId**: 2000000090092**name**: Martina Musterarzt**requestor**: true**purposeOfUse**:Normal Access

> **agent****type**:Destination Role ID**who**: Community A**requestor**: false

### Networks

| | | |
| :--- | :--- | :--- |
| - | **Address** | **Type** |
| * | http://example.com | URI |


> **agent****type**:Source Role ID**who**: My e-Health App**requestor**: false

### Networks

| | | |
| :--- | :--- | :--- |
| - | **Address** | **Type** |
| * | 192.168.1.1 | IP Address |


### Sources

| | | |
| :--- | :--- | :--- |
| - | **Site** | **Observer** |
| * | 2.16.756.4.5.6 | Community A |

> **entity****what**: Identifier:`urn:oid:2.16.756.5.30.1.127.3.10.3`/761337610411353650**type**:[Audit event entity type: 1](http://terminology.hl7.org/7.0.1/CodeSystem-audit-entity-type.html#audit-entity-type-1)(Person)**role**:[AuditEventEntityRole: 1](http://terminology.hl7.org/7.0.1/CodeSystem-object-role.html#object-role-1)(Patient)

> **entity****type**:[Audit event entity type: 2](http://terminology.hl7.org/7.0.1/CodeSystem-audit-entity-type.html#audit-entity-type-2)(System Object)**role**:[AuditEventEntityRole: 24](http://terminology.hl7.org/7.0.1/CodeSystem-object-role.html#object-role-24)(Query)**query**:`aHR0cHM6Ly9leGFtcGxlLm9yZy9maGlyL0NvbnNlbnQ/cGF0aWVudDppZGVudGlmaWVyPXVybjpvaWQ6Mi4xNi43NTYuNS4zMC4xLjEyNy4zLjEwLjN8NzYxMzM3NjEwNDExMzUzNjUw`

> **entity****what**: Identifier: 00-0af7651916cd43dd8448eb211c80319c-b7ad6b7169203331-00**type**:[Audit event entity type: 4](http://terminology.hl7.org/7.0.1/CodeSystem-audit-entity-type.html#audit-entity-type-4)(Other)**role**:[AuditEventEntityRole: 26](http://terminology.hl7.org/7.0.1/CodeSystem-object-role.html#object-role-26)(Processing Element)



## Resource Content

```json
{
  "resourceType" : "AuditEvent",
  "id" : "ChAuditEventPpq5ConsumerExample",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventPpq5Consumer"
    ]
  },
  "type" : {
    "system" : "http://terminology.hl7.org/CodeSystem/audit-event-type",
    "code" : "rest",
    "display" : "Restful Operation"
  },
  "subtype" : [
    {
      "system" : "urn:e-health-suisse:event-type-code",
      "code" : "PPQ-5",
      "display" : "Mobile Privacy Policy Retrieve"
    },
    {
      "system" : "http://hl7.org/fhir/restful-interaction",
      "code" : "search",
      "display" : "search"
    }
  ],
  "recorded" : "2024-10-28T09:43:56Z",
  "outcome" : "0",
  "agent" : [
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
        "display" : "Community A"
      },
      "requestor" : false,
      "network" : {
        "address" : "http://example.com",
        "type" : "5"
      }
    },
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
        "display" : "My e-Health App"
      },
      "requestor" : false,
      "network" : {
        "address" : "192.168.1.1",
        "type" : "2"
      }
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
      "type" : {
        "system" : "http://terminology.hl7.org/CodeSystem/audit-entity-type",
        "code" : "2",
        "display" : "System Object"
      },
      "role" : {
        "system" : "http://terminology.hl7.org/CodeSystem/object-role",
        "code" : "24",
        "display" : "Query"
      },
      "query" : "aHR0cHM6Ly9leGFtcGxlLm9yZy9maGlyL0NvbnNlbnQ/cGF0aWVudDppZGVudGlmaWVyPXVybjpvaWQ6Mi4xNi43NTYuNS4zMC4xLjEyNy4zLjEwLjN8NzYxMzM3NjEwNDExMzUzNjUw"
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
