# CH ALIS Leistungsschnittstelle - Service - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Leistungsschnittstelle - Service**

## Logical Model: CH ALIS Leistungsschnittstelle - Service 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Service | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisLeistungsschnittstelleService |
| **Copyright/Legal**: CC0-1.0 | |

 
This logical model describes the Service of 'Leistungsschnittstelle ALIS Version 5.1'. 

**Usages:**

* Use this Logical Model: [CH ALIS Leistungsschnittstelle - Visit](StructureDefinition-Visit.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-Service.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-Service.csv), [Excel](StructureDefinition-Service.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "Service",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-namespace",
    "valueUri" : "noNamespace"
  }],
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Service",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisLeistungsschnittstelleService",
  "title" : "CH ALIS Leistungsschnittstelle - Service",
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
  "description" : "This logical model describes the Service of 'Leistungsschnittstelle ALIS Version 5.1'.",
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
  "type" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Service",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "Service",
      "path" : "Service",
      "short" : "CH ALIS Leistungsschnittstelle - Service",
      "definition" : "3, Leistung, Leistungen stehen zum Patient im Verhltnis 1:N"
    },
    {
      "id" : "Service.Transaction",
      "path" : "Service.Transaction",
      "representation" : ["xmlAttr"],
      "short" : "Optional, only required for possible value delete",
      "definition" : "3.1, Transaktion, Alphanum., Attribut im Knoten „Leistung“, Kennzeichen der Transaktion (insert, update, delete), Optional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Service.ServiceDate",
      "path" : "Service.ServiceDate",
      "short" : "3.2, Leistungs - Datum, XML-Format Datetime, Datum, Zeit der Leistungserbringung",
      "definition" : "3.2, Leistungs - Datum, XML-Format Datetime, Datum, Zeit der Leistungserbringung",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/DateTime"
      }]
    },
    {
      "id" : "Service.SessionID",
      "path" : "Service.SessionID",
      "short" : "3.3, Sitzung, Alphanum. Max. 64 Zeichen, Verwendung nur wenn SessionIDSectionB 3.15 nicht verwendet wird, 1 – n / Tag",
      "definition" : "3.3, Sitzung, Alphanum. Max. 64 Zeichen, Verwendung nur wenn SessionIDSectionB 3.15 nicht verwendet wird, 1 – n / Tag",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Service.OrderID",
      "path" : "Service.OrderID",
      "short" : "3.4, Auftragsnummer, Max. 64 Zeichen, GUID (global universal identification) Alphanum., jeweils auf ebene Leistung mitsenden), Optional",
      "definition" : "3.4, Auftragsnummer, Max. 64 Zeichen, GUID (global universal identification) Alphanum., jeweils auf ebene Leistung mitsenden), Optional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Service.OrderDate",
      "path" : "Service.OrderDate",
      "short" : "3.5 (*) Datum, Zeit des Auftrags für Laborleistungen falls nicht Leistungszuordnung gemäss Tarifvertrag Anhang B, Kapitel 4",
      "definition" : "3.5 (*) Datum, Zeit des Auftrags für Laborleistungen falls nicht Leistungszuordnung gemäss Tarifvertrag Anhang B, Kapitel 4",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/DateTime"
      }]
    },
    {
      "id" : "Service.ReferrerID",
      "path" : "Service.ReferrerID",
      "short" : "3.6, Auftraggebende Kostenstelle, Max. 50 Zeichen, Der Empfänger bestimmt die auftraggebende Kostenstelle, Optional",
      "definition" : "3.6, Auftraggebende Kostenstelle, Max. 50 Zeichen, Der Empfänger bestimmt die auftraggebende Kostenstelle, Optional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Service.ServiceType",
      "path" : "Service.ServiceType",
      "short" : "3.7, Katalog, 20 Zeichen, Spezifikation, Zwischen den Partnern zu vereinbaren",
      "definition" : "3.7, Katalog, 20 Zeichen, Spezifikation, Zwischen den Partnern zu vereinbaren",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Service.ServiceItem",
      "path" : "Service.ServiceItem",
      "short" : "3.8, Tarifposition, Alphanum. 20 Zeichen, Nummer (Identifikation der Leistung, LKAAT, AL, interner Katalog), Obligatorisch",
      "definition" : "3.8, Tarifposition, Alphanum. 20 Zeichen, Nummer (Identifikation der Leistung, LKAAT, AL, interner Katalog), Obligatorisch",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Service.Form",
      "path" : "Service.Form",
      "short" : "3.9, Formular, Alphanum. 20 Zeichen, Text, Formularbezeichnung, Optional",
      "definition" : "3.9, Formular, Alphanum. 20 Zeichen, Text, Formularbezeichnung, Optional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Service.EnteredDateTime",
      "path" : "Service.EnteredDateTime",
      "short" : "3.10, Erfassungsdatum, XML-Format Datetime, Datum, Zeit der Erfassung der Leistungserfassung, Optional",
      "definition" : "3.10, Erfassungsdatum, XML-Format Datetime, Datum, Zeit der Erfassung der Leistungserfassung, Optional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/DateTime"
      }]
    },
    {
      "id" : "Service.ProviderID",
      "path" : "Service.ProviderID",
      "short" : "3.11, Erbringende Organisation, Kostenstelle / Organisation; Text oder ID, Zwischen den Partnern zu vereinbaren",
      "definition" : "3.11, Erbringende Organisation, Kostenstelle / Organisation; Text oder ID, Zwischen den Partnern zu vereinbaren",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Service.SectionCode",
      "path" : "Service.SectionCode",
      "short" : "3.12 (*), Fachbereich, Alphanum, Max. 9 Zeichen, Optional, Fachbereich gemäss OAAT Reglement Fachbereiche",
      "definition" : "3.12 (*), Fachbereich, Alphanum, Max. 9 Zeichen, Optional, Fachbereich gemäss OAAT Reglement Fachbereiche",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Service.EnteredBy",
      "path" : "Service.EnteredBy",
      "short" : "3.13, Erfasser, Text oder ID,",
      "definition" : "3.13, Erfasser, Text oder ID,",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Service.ItemNumber",
      "path" : "Service.ItemNumber",
      "short" : "3.14, Laufnummer, Alphanum. Max. 64 Zeichen, Wird jeder erbrachten Leistung mitgegeben, Optional",
      "definition" : "3.14, Laufnummer, Alphanum. Max. 64 Zeichen, Wird jeder erbrachten Leistung mitgegeben, Optional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Service.RefItemNumber",
      "path" : "Service.RefItemNumber",
      "short" : "3.15, Referenz Laufnummer zu Hauptleistung, Format von Pos. 3.11, Nur bei Nebenleistungen notwendig, Optional",
      "definition" : "3.15, Referenz Laufnummer zu Hauptleistung, Format von Pos. 3.11, Nur bei Nebenleistungen notwendig, Optional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Service.Quantity",
      "path" : "Service.Quantity",
      "short" : "3.16, Anzahl, Numerisch (Dezimal, d.h. Nachkommastellen sind möglich), eine negative Leistung ist möglich (+ / -), gebrochene Werte müssen beim Import in Systeme die nur ganzzahlige Mengen akzeptieren mit dem Wert aus dem Parameter <NumberofParticipants> auf eine ganze Zahl umgerechnet werden, Obligat; negative Werte sind zu vereinbaren",
      "definition" : "3.16, Anzahl, Numerisch (Dezimal, d.h. Nachkommastellen sind möglich), eine negative Leistung ist möglich (+ / -), gebrochene Werte müssen beim Import in Systeme die nur ganzzahlige Mengen akzeptieren mit dem Wert aus dem Parameter <NumberofParticipants> auf eine ganze Zahl umgerechnet werden, Obligat; negative Werte sind zu vereinbaren",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Decimal"
      }]
    },
    {
      "id" : "Service.TPValue",
      "path" : "Service.TPValue",
      "short" : "3.17 (*) Taxpunktwert, Numerisch (Dezimal), TP-Wert der Leistung\tOptional",
      "definition" : "3.17 (*) Taxpunktwert, Numerisch (Dezimal), TP-Wert der Leistung\tOptional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Decimal"
      }]
    },
    {
      "id" : "Service.ServiceItemErrorCode",
      "path" : "Service.ServiceItemErrorCode",
      "short" : "3.18, Fehlercode, Alphanum., Fehlertabelle bei unbekanntem Feldinhalt, inkorrekten Werten etc., Optional",
      "definition" : "3.18, Fehlercode, Alphanum., Fehlertabelle bei unbekanntem Feldinhalt, inkorrekten Werten etc., Optional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text"
      }]
    },
    {
      "id" : "Service.SessionSectionB",
      "path" : "Service.SessionSectionB",
      "short" : "3.19 (*) Sitzungsinfo nach Anhang B des Tarifs (tarifarische Sitzung) Verwendung nur wenn SessionID 3.2 nicht verwendet wird",
      "definition" : "3.19 (*) Sitzungsinfo nach Anhang B des Tarifs (tarifarische Sitzung) Verwendung nur wenn SessionID 3.2 nicht verwendet wird",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/SessionSectionB"
      }]
    },
    {
      "id" : "Service.Diagnosis",
      "path" : "Service.Diagnosis",
      "short" : "3.20 (*) Diagnose, Optional",
      "definition" : "3.20 (*) Diagnose, Optional",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Diagnosis"
      }]
    },
    {
      "id" : "Service.ServiceAssignment",
      "path" : "Service.ServiceAssignment",
      "short" : "3.21 (*) Leistungszuordnung Zuordnung von Labor-, Pathologie- oder Berichtsleistungen gemäss Tarifvertrag Anhang B, Kapitel 4",
      "definition" : "3.21 (*) Leistungszuordnung Zuordnung von Labor-, Pathologie- oder Berichtsleistungen gemäss Tarifvertrag Anhang B, Kapitel 4",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ServiceAssignment"
      }]
    },
    {
      "id" : "Service.PersonV40",
      "path" : "Service.PersonV40",
      "short" : "3.22, PersonV40, Optional (0,N)",
      "definition" : "3.22, PersonV40, Optional (0,N)",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/PersonV40"
      }]
    },
    {
      "id" : "Service.ParameterV40",
      "path" : "Service.ParameterV40",
      "short" : "4, ParameterV40, Optional (0,N)",
      "definition" : "4, ParameterV40, Optional (0,N)",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ParameterV40"
      }]
    }]
  }
}

```
