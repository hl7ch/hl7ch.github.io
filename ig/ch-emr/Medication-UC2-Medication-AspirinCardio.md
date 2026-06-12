# UC2-Medication-AspirinCardio - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC2-Medication-AspirinCardio**

## Example Medication: UC2-Medication-AspirinCardio

Profile: [CH IPS Medication](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-medication.html)

**code**: Aspirin Cardio 100 mg (Acetylsalicylsäure)

**form**: Tablette

**amount**: 28 Tablette (Details: SNOMED CT code732936001 = '732936001')/1 Packung (Details: SNOMED CT code1681000175101 = '1681000175101')



## Resource Content

```json
{
  "resourceType" : "Medication",
  "id" : "UC2-Medication-AspirinCardio",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication"]
  },
  "code" : {
    "coding" : [{
      "system" : "urn:oid:2.51.1.1",
      "code" : "7680517950680",
      "display" : "ASPIRIN CARDIO Filmtabl 100 mg 28 Stk"
    },
    {
      "system" : "http://www.whocc.no/atc",
      "code" : "B01AC06",
      "display" : "acetylsalicylic acid"
    }],
    "text" : "Aspirin Cardio 100 mg (Acetylsalicylsäure)"
  },
  "form" : {
    "coding" : [{
      "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
      "code" : "10219000"
    }],
    "text" : "Tablette"
  },
  "amount" : {
    "numerator" : {
      "value" : 28,
      "unit" : "Tablette",
      "system" : "http://snomed.info/sct|http://snomed.info/sct/2011000195101",
      "code" : "732936001"
    },
    "denominator" : {
      "value" : 1,
      "unit" : "Packung",
      "system" : "http://snomed.info/sct|http://snomed.info/sct/2011000195101",
      "code" : "1681000175101"
    }
  }
}

```
