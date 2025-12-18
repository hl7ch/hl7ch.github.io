# Example of audit event for a [CH:MHD-1] transaction at Source - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of audit event for a [CH:MHD-1] transaction at Source**

## Example AuditEvent: Example of audit event for a [CH:MHD-1] transaction at Source

Profile: [CH Audit Event for [CH:MHD-1] Document Source](StructureDefinition-ch-mhd-updatedocumentmetadata-audit-source.md)

**type**: [DICOM: 110106](http://hl7.org/fhir/R4/codesystem-dicom-dcim.html#dicom-dcim-110106) (Export)

**subtype**: unknown: CH-MHD-1 (Update Document Metadata)

**recorded**: 2024-10-28 09:43:56+0000

**outcome**: Success

> **agent****type**:Source Role ID**who**: My e-Health App**requestor**: false

### Networks

| | | |
| :--- | :--- | :--- |
| - | **Address** | **Type** |
| * | 192.168.1.1 | IP Address |


> **agent****type**:Destination Role ID**who**: Community A**requestor**: false

### Networks

| | | |
| :--- | :--- | :--- |
| - | **Address** | **Type** |
| * | http://example.org | URI |


> **agent****type**:responsible party**role**:Healthcare professional**altId**: 2000000090092**name**: Martina Musterarzt**requestor**: true**purposeOfUse**:Normal Access

### Sources

| | | |
| :--- | :--- | :--- |
| - | **Site** | **Observer** |
| * | 2.16.756.1.2.3 | My e-Health App |

> **entity****what**: Identifier: 00-0af7651916cd43dd8448eb211c80319c-b7ad6b7169203331-00**type**:[Audit event entity type: 4](http://terminology.hl7.org/7.0.1/CodeSystem-audit-entity-type.html#audit-entity-type-4)(Other)**role**:[AuditEventEntityRole: 26](http://terminology.hl7.org/7.0.1/CodeSystem-object-role.html#object-role-26)(Processing Element)

> **entity****what**: Identifier:`urn:oid:2.16.756.5.30.1.127.3.10.3`/761337610411353650**type**:[Audit event entity type: 1](http://terminology.hl7.org/7.0.1/CodeSystem-audit-entity-type.html#audit-entity-type-1)(Person)**role**:[AuditEventEntityRole: 1](http://terminology.hl7.org/7.0.1/CodeSystem-object-role.html#object-role-1)(Patient)

> **entity****what**:[DocumentReference: extension = Healthcare professional (ch-ehealth-codesystem-role#HCP); masterIdentifier = OID:1.3.6.1.4.1.12559.11.13.2.1.2951 (use: usual, ); identifier = UUID:7261fa25-b36d-4660-a58a-d9df4370e985 (use: official, ); status = current; type = Record artifact; category = Administrative documentation; date = 2025-09-24 12:01:30+0000; description = Test PDF; securityLabel = Normal (qualifier value)](Bundle-Bundle-FindDocumentReferences.md#http-//example.org/DocumentReference/DocRefPdf)**type**:[Audit event entity type: 2](http://terminology.hl7.org/7.0.1/CodeSystem-audit-entity-type.html#audit-entity-type-2)(System Object)**role**:[AuditEventEntityRole: 20](http://terminology.hl7.org/7.0.1/CodeSystem-object-role.html#object-role-20)(Job)



## Resource Content

```json
{
  "resourceType" : "AuditEvent",
  "id" : "ChAuditEventChMhd1SourceExample",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-updatedocumentmetadata-audit-source"
    ]
  },
  "type" : {
    "system" : "http://dicom.nema.org/resources/ontology/DCM",
    "code" : "110106",
    "display" : "Export"
  },
  "subtype" : [
    {
      "system" : "urn:e-health-suisse:event-type-code",
      "code" : "CH-MHD-1",
      "display" : "Update Document Metadata"
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
        "address" : "http://example.org",
        "type" : "5"
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
    "site" : "2.16.756.1.2.3",
    "observer" : {
      "display" : "My e-Health App"
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
        "reference" : "http://example.org/DocumentReference/DocRefPdf"
      },
      "type" : {
        "system" : "http://terminology.hl7.org/CodeSystem/audit-entity-type",
        "code" : "2",
        "display" : "System Object"
      },
      "role" : {
        "system" : "http://terminology.hl7.org/CodeSystem/object-role",
        "code" : "20",
        "display" : "Job"
      }
    }
  ]
}

```
