# EprAuditTrailConsumptionEventType - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EprAuditTrailConsumptionEventType**

## ValueSet: EprAuditTrailConsumptionEventType 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/EprAuditTrailConsumptionEventType | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:EprAuditTrailConsumptionEventType |
| *Other Identifiers:*OID:2.16.756.5.30.1.127.3.10.13.2 (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
Audit Trail Consumption Event Types for CH:ATC 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/EprAuditTrailConsumptionEventType) via the XIG (Cross-IG) index for FHIR specifications. 

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "EprAuditTrailConsumptionEventType",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.13.2--20230608144845",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2023-06-08T14:48:45+02:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/EprAuditTrailConsumptionEventType",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.127.3.10.13.2"
    }
  ],
  "version" : "3.3.0",
  "name" : "EprAuditTrailConsumptionEventType",
  "title" : "EprAuditTrailConsumptionEventType",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:47:47+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Audit Trail Consumption Event Types for CH:ATC",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "immutable" : false,
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "urn:oid:2.16.756.5.30.1.127.3.10.7",
        "concept" : [
          {
            "code" : "ATC_DOC_CREATE",
            "display" : "Document upload",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dokument-Upload"
              },
              {
                "language" : "fr-CH",
                "value" : "Chargement de documents"
              },
              {
                "language" : "it-CH",
                "value" : "Upload di un documento"
              },
              {
                "language" : "rm-CH",
                "value" : "Upload d'in document"
              }
            ]
          },
          {
            "code" : "ATC_DOC_READ",
            "display" : "Document retrieval",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dokumentabruf"
              },
              {
                "language" : "fr-CH",
                "value" : "Récupération de documents"
              },
              {
                "language" : "it-CH",
                "value" : "Ricerca di un documento"
              },
              {
                "language" : "rm-CH",
                "value" : "Consultar in document"
              }
            ]
          },
          {
            "code" : "ATC_DOC_UPDATE",
            "display" : "Document or Document Metadata update",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dokument- oder Dokument-Metadaten-Aktualisierung"
              },
              {
                "language" : "fr-CH",
                "value" : "Mise à jour de documents ou de métadonnées de documents"
              },
              {
                "language" : "it-CH",
                "value" : "Aggiornamento di un documento o dei metadati di un documento"
              },
              {
                "language" : "rm-CH",
                "value" : "Actualisar in document u las metadatas d'in document"
              }
            ]
          },
          {
            "code" : "ATC_DOC_DELETE",
            "display" : "Document removal",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dokumentlöschung"
              },
              {
                "language" : "fr-CH",
                "value" : "Suppression de documents"
              },
              {
                "language" : "it-CH",
                "value" : "Rimozione di un documento"
              },
              {
                "language" : "rm-CH",
                "value" : "Stizzar in document"
              }
            ]
          },
          {
            "code" : "ATC_DOC_SEARCH",
            "display" : "Document search",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dokumentensuche"
              },
              {
                "language" : "fr-CH",
                "value" : "Recherche de documents"
              },
              {
                "language" : "it-CH",
                "value" : "Ricerca documenti"
              },
              {
                "language" : "rm-CH",
                "value" : "Tschertga da documents"
              }
            ]
          },
          {
            "code" : "ATC_POL_CREATE_AUT_PART_AL",
            "display" : "Authorize participants to access level/date",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Teilnehmende für Zugriffsstufe/Datum autorisieren"
              },
              {
                "language" : "fr-CH",
                "value" : "Autoriser les participants pour ce niveau d’accès / à cette date"
              },
              {
                "language" : "it-CH",
                "value" : "Autorizzare i partecipanti ad accedere a un livello/una data"
              },
              {
                "language" : "rm-CH",
                "value" : "Autorisar las persunas participantas per in stgalim d'access/per ina data"
              }
            ]
          },
          {
            "code" : "ATC_POL_UPDATE_AUT_PART_AL",
            "display" : "Update access level/date of authorized participants",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zugriffsstufe/Datum autorisierter Teilnehmender aktualisieren"
              },
              {
                "language" : "fr-CH",
                "value" : "Mettre à jour le niveau d’accès / la date des participants autorisés"
              },
              {
                "language" : "it-CH",
                "value" : "Aggiornare il livello/la data di accesso dei partecipanti autorizzati"
              },
              {
                "language" : "rm-CH",
                "value" : "Actualisar il stgalim d'access/la data per las persunas participantas autorisadas"
              }
            ]
          },
          {
            "code" : "ATC_POL_REMOVE_AUT_PART_AL",
            "display" : "Remove authorization for participants to access level/date",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Autorisierung von Teilnehmenden für Zugriffsstufe/Datum aufheben"
              },
              {
                "language" : "fr-CH",
                "value" : "Supprimer l’autorisation des participants à ce niveau d’accès / à cette date"
              },
              {
                "language" : "it-CH",
                "value" : "Rimuovere l'autorizzazione di accesso dei partecipanti al livello/alla data"
              },
              {
                "language" : "rm-CH",
                "value" : "Annullar l'autorisaziun da persunas participantas per in stgalim d'access/per ina data"
              }
            ]
          },
          {
            "code" : "ATC_POL_DEF_CONFLEVEL",
            "display" : "Set or update the default Confidentiality Level for new documents",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Standard-Vertraulichkeitsstufe für neue Dokumente setzen oder aktualisieren"
              },
              {
                "language" : "fr-CH",
                "value" : "Définir ou mettre à jour le niveau de confidentialité pour les nouveaux documents"
              },
              {
                "language" : "it-CH",
                "value" : "Impostare o aggiornare il livello di confidenzialità di default per i documenti nuovi"
              },
              {
                "language" : "rm-CH",
                "value" : "Fixar u actualisar il stgalim da confidenzialitad standard per documents novs"
              }
            ]
          },
          {
            "code" : "ATC_POL_DIS_EMER_USE",
            "display" : "Disabling Emergency Access",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Notfall-Zugriff deaktivieren"
              },
              {
                "language" : "fr-CH",
                "value" : "Désactiver l’accès d’urgence"
              },
              {
                "language" : "it-CH",
                "value" : "Disabilitare l'accesso di emergenza"
              },
              {
                "language" : "rm-CH",
                "value" : "Deactivar l'access d'urgenza"
              }
            ]
          },
          {
            "code" : "ATC_POL_ENA_EMER_USE",
            "display" : "Enabling Emergency Access",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Notfall-Zugriff aktivieren"
              },
              {
                "language" : "fr-CH",
                "value" : "Autoriser l’accès d’urgence"
              },
              {
                "language" : "it-CH",
                "value" : "Abilitare l'accesso di emergenza"
              },
              {
                "language" : "rm-CH",
                "value" : "Activar l'access d'urgenza"
              }
            ]
          },
          {
            "code" : "ATC_POL_INCL_BLACKLIST",
            "display" : "Assign a Healthcare Professional to Blacklist",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gesundheitsfachperson auf die schwarze Liste setzen"
              },
              {
                "language" : "fr-CH",
                "value" : "Ajouter un professionnel de la santé à la liste noire"
              },
              {
                "language" : "it-CH",
                "value" : "Aggiungere un professionista della salute alla lista nera"
              },
              {
                "language" : "rm-CH",
                "value" : "Metter sin la glista naira ina persuna spezialisada dal sectur da sanadad"
              }
            ]
          },
          {
            "code" : "ATC_POL_EXL_BLACKLIST",
            "display" : "Exclude a Healthcare Professional from Blacklist",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gesundheitsfachperson von der schwarzen Liste streichen"
              },
              {
                "language" : "fr-CH",
                "value" : "Retirer un professionnel de la santé de la liste noire"
              },
              {
                "language" : "it-CH",
                "value" : "Rimuovere un professionista della salute dalla lista nera"
              },
              {
                "language" : "rm-CH",
                "value" : "Stritgar da la glista naira ina persuna spezialisada dal sectur da sanadad"
              }
            ]
          },
          {
            "code" : "ATC_LOG_READ",
            "display" : "Accessing the Patient Audit Record Repository",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Auf die patientenbezogene Auditprotokoll-Ablage zugreifen"
              },
              {
                "language" : "fr-CH",
                "value" : "En cours d’accès au dépôt de contrôle des dossiers de patients"
              },
              {
                "language" : "it-CH",
                "value" : "Accesso all'Audit Record Repository del paziente"
              },
              {
                "language" : "rm-CH",
                "value" : "Access al deposit da controlla dals dossiers da pazients"
              }
            ]
          },
          {
            "code" : "ATC_HPD_GROUP_ENTRY_NOTIFY",
            "display" : "Entry of healthcare professionals into a group",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Aufnahme von Gesundheitsfachpersonal in eine Gruppe"
              },
              {
                "language" : "fr-CH",
                "value" : "Entrée des professionnels de santé dans un groupe"
              },
              {
                "language" : "it-CH",
                "value" : "Inserimento di operatori sanitari in un gruppo"
              },
              {
                "language" : "rm-CH",
                "value" : "Persunas spezialisadas dal sectur da sanadad en ina gruppa"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
