# Patient Document 1 Stammgemeinschaft Composition - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient Document 1 Stammgemeinschaft Composition**

## Example Composition: Patient Document 1 Stammgemeinschaft Composition

Language: en-US

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:e652561f-5df2-418e-8cb4-b4b07fd2ee42

**status**: Final

**type**: Immunization record

**date**: 2021-06-01 00:00:00+0200

**author**: [Practitioner Allzeit Bereit (official)](Bundle-1-ZuweisungZurRadiologischenDiagnostik-FHIR.md#http-//test.fhir.ch/r4/Practitioner/AllzeitBereit)

**title**: Immunization Administration

**confidentiality**: normal



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "ResourceCrossReferencesDokumentComposition",
  "language" : "en-US",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:e652561f-5df2-418e-8cb4-b4b07fd2ee42"
  },
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "41000179103",
        "display" : "Immunization record"
      }
    ]
  },
  "subject" : {
    "reference" : "http://test.fhir.ch/r4/Patient/MaxMuster"
  },
  "date" : "2021-06-01T00:00:00+02:00",
  "author" : [
    {
      "reference" : "http://test.fhir.ch/r4/Practitioner/AllzeitBereit"
    }
  ],
  "title" : "Immunization Administration",
  "confidentiality" : "N",
  "_confidentiality" : {
    "extension" : [
      {
        "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-confidentialitycode",
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "17621005",
              "display" : "Normal (qualifier value)"
            }
          ]
        }
      }
    ]
  },
  "section" : [
    {
      "id" : "administration",
      "title" : "Immunization Administration",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "11369-6",
            "display" : "History of Immunization note"
          }
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xml:lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\"><p><b>Code: </b><span>History of Immunization note (http://loinc.org#11369-6)</span></p><p><b>Entries:</b></p><table><tr><td><a href=\"Immunization-ImmunizationEntry.html\">Immunization/ImmunizationEntry</a></td></tr></table></div>"
      },
      "entry" : [
        {
          "reference" : "http://test.fhir.ch/r4/Immunization/ImmunizationEntry"
        }
      ]
    }
  ]
}

```
