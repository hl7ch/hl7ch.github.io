# CH ALIS Leistungsschnittstelle - ServiceAssignment - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Leistungsschnittstelle - ServiceAssignment**

## Logical Model: CH ALIS Leistungsschnittstelle - ServiceAssignment 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ServiceAssignment | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisLeistungsschnittstelleServiceAssignment |
| **Copyright/Legal**: CC0-1.0 | |

 
This logical model describes the ServiceAssignment of 'Leistungsschnittstelle ALIS Version 5.1'. 

**Usages:**

* Use this Logical Model: [CH ALIS Leistungsschnittstelle - Service](StructureDefinition-Service.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-ServiceAssignment.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ServiceAssignment.csv), [Excel](StructureDefinition-ServiceAssignment.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ServiceAssignment",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-namespace",
    "valueUri" : "noNamespace"
  }],
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ServiceAssignment",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisLeistungsschnittstelleServiceAssignment",
  "title" : "CH ALIS Leistungsschnittstelle - ServiceAssignment",
  "status" : "active",
  "date" : "2026-06-12T18:35:48+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "This logical model describes the ServiceAssignment of 'Leistungsschnittstelle ALIS Version 5.1'.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ServiceAssignment",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "ServiceAssignment",
      "path" : "ServiceAssignment",
      "short" : "CH ALIS Leistungsschnittstelle - ServiceAssignment",
      "definition" : "3.21(*) \tLeistungszuordnung\t\tZuordnung von Labor-, Pathologie- oder Berichtsleistungen gemäss Tarifvertrag Anhang B, Kapitel 4\tOptional\tServiceAssignment"
    },
    {
      "id" : "ServiceAssignment.OrderingProviderID",
      "path" : "ServiceAssignment.OrderingProviderID",
      "short" : "3.21.1 (*)\tAuftraggeber \tAlphanum.\tOE\tOptional\tOrderingProviderID",
      "definition" : "3.21.1 (*)\tAuftraggeber \tAlphanum.\tOE\tOptional\tOrderingProviderID",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "ServiceAssignment.OrderSectionCode",
      "path" : "ServiceAssignment.OrderSectionCode",
      "short" : "3.21.2 (*)\tAuftraggeber Fachbereich\tAlphanum, Max. 9 Zeichen\tFachbereich gemäss OAAT Reglement Fachbereiche\tOptional\tOrderSectionCode",
      "definition" : "3.21.2 (*)\tAuftraggeber Fachbereich\tAlphanum, Max. 9 Zeichen\tFachbereich gemäss OAAT Reglement Fachbereiche\tOptional\tOrderSectionCode",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "ServiceAssignment.OrderDate",
      "path" : "ServiceAssignment.OrderDate",
      "short" : "3.21.3 (*)\tAuftragsdatum\tXML-Format Datetime\tAuftragsdatum bzw. bei Folgeauftrag ohne Sitzung Datum der Sitzung der Probeentnahme oder Datum der letzten im Bericht beschriebenen Sitzung.\tOptional\tOrderDate",
      "definition" : "3.21.3 (*)\tAuftragsdatum\tXML-Format Datetime\tAuftragsdatum bzw. bei Folgeauftrag ohne Sitzung Datum der Sitzung der Probeentnahme oder Datum der letzten im Bericht beschriebenen Sitzung.\tOptional\tOrderDate",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/DateTime"
      }]
    },
    {
      "id" : "ServiceAssignment.FollowUpOrder",
      "path" : "ServiceAssignment.FollowUpOrder",
      "short" : "3.21.4 (*)\tFolgeauftrag\tBoolean\tFlag für Anzeige Folgeauftrag\tOptional\tFollowUpOrder",
      "definition" : "3.21.4 (*)\tFolgeauftrag\tBoolean\tFlag für Anzeige Folgeauftrag\tOptional\tFollowUpOrder",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Boolean"
      }]
    }]
  }
}

```
